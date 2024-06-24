<?php

namespace App\Http\Controllers\Admin;

require_once __DIR__ . '/../../../../vendor/autoload.php';

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Http\Requests\ArticleRequest;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use WeStacks\TeleBot\TeleBot;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Arr;
use WeStacks\TeleBot\Objects\InputFile;
use Illuminate\Support\Facades\DB;
use App\Models\Message;
use App\Notifications\MessageSent;
use Illuminate\Support\Facades\Notification;
use Carbon\Carbon;
use App\Jobs\SendNotificationJob;








class ArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin.articles.index')->only('index');
        $this->middleware('can:admin.articles.create')->only('create', 'store');
        $this->middleware('can:admin.articles.edit')->only('edit', 'update');
        $this->middleware('can:admin.articles.destroy')->only('destroy');
    }


    public function index()
    {
        return view('admin.articles.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.articles.create');
    }

    /** 
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleRequest $request)
    {

        $request->validate([
            'file' => 'required|image'
        ]);
        $article = Article::create($request->all());

        if ($request->file('file')) {

            $url = Storage::put('articles', $request->file('file'));

            $article->image()->create([
                'url' => $url
            ]);
        }

        // Obtener la URL de la imagen almacenada
        $imagePath = Storage::url($url);

        // Obtener todos los datos ingresados en el formulario
        $data = $request->except('_token');

        // Excluir ciertas claves de los datos
        $excludedKeys = ['file', 'status', 'modo','body']; // Agrega aquí las claves que deseas excluir
        $filteredData = Arr::except($data, $excludedKeys);

        // Convertir los datos filtrados en una cadena de texto
        $messageText = '';

        $messageText = '👉🏼 NUEVA SEÑAL ▶';


         // Obtener el valor de 'estado'
         $estadoValue = '';
         foreach ($filteredData as $key => $value) {
             if ($key === 'estado') {
                 if ($value === 'En curso') {
                     $estadoValue = ' Abierta 💹';
                 } elseif ($value === 'Positiva' || $value === 'Negativa') {
                     $estadoValue = ' Cerrada 🛑';
                 } elseif ($value === 'Cancelada') {
                     $estadoValue = ' Cancelar ❌';
                 } elseif ($value === 'Break even') {
                     $estadoValue = ' Break even 🔵';
                 }
             }
         }
         
         // Concatenar el valor de 'estado' al lado del título
         $messageText .= $estadoValue . "\n\n";
         
         foreach ($filteredData as $key => $value) {
             if ($key === 'estado') {
                 // No hagas nada, ya hemos manejado 'estado' antes
             } elseif ($key === 'orden') {
                 // Asignar el emoji correspondiente a la orden
                 if ($value === 'Buy') {
                     $messageText .= ' 📉 Buy' . "\n\n";
                 } elseif ($value === 'Sell') {
                     $messageText .= ' 📈 Sell' . "\n\n";
                 } elseif ($value === 'Buy Limit') {
                     $messageText .= ' 📉 Buy Limit' . "\n\n";
                 } elseif ($value === 'Sell Limit') {
                     $messageText .= ' 📈 Sell Limit' . "\n\n";
                 } elseif ($value === 'Buy Stop') {
                     $messageText .= ' 📉 Buy Stop' . "\n\n";
                 } elseif ($value === 'Sell Stop') {
                     $messageText .= ' 📈 Sell Stop' . "\n\n";
                 }
             } elseif ($key === 'RR') {
                 // Asignar el emoji correspondiente a la orden
                 if ($value === '1:1' || $value === '1:2' || $value === '1:3' || $value === '1:4' || $value === '1:5' || $value === '1:6') {
                     $messageText .= "🔘 " . ucfirst($key) . ": " . $value . "\n\n";
                 }
             } elseif ($key === 'title') {
                 // Concatenar el título al mensaje
                 $messageText .= "💎 #" . $value;
             } elseif ($key === 'entrada') {
                 // Concatenar la entrada al mensaje
                 $messageText .= "🚀 " . ucfirst($key) . ": " . $value . "\n\n";
             } elseif ($key === 'body') {
                 // Agregar solo el contenido sin el título para el atributo 'body'
                 $messageText .= $value . "\n";
             } elseif ($key === 'tp') {
                 // Agregar solo el contenido sin el título para el atributo 'body'
                 $messageText .= "🟢 " . ucfirst($key) . ": " . $value . "\n\n";
             } elseif ($key === 'sl') {
                 // Agregar solo el contenido sin el título para el atributo 'body'
                 $messageText .= "🔴 " . ucfirst($key) . ": " . $value . "\n\n";
             } else {
                 // Concatenar el título y el contenido al mensaje para otras claves
                 $messageText .= ucfirst($key) . ": " . $value . "\n\n";
             }
         }




        $messageText = strip_tags($messageText);

        if ($request->input('status') === '2') {

            // Verificar el modo
            $modo = $request->input('modo');
        
            if ($modo === 'free' || $modo === 'plus') {
                

                $botToken = env('TELEGRAM_BOT_TOKEN');

                // Enviar mensaje utilizando TeleBot
                $bot = new TeleBot([
                    'token'      => $botToken,
                    'name'       => 'forexgump_bot',
                    'api_url'    => 'https://api.telegram.org/bot6316011921:AAETN-4kJn1qslxlAdmvhaSK57qSr_-gDN8/{METHOD}',
                    'exceptions' => true,
                    'async'      => false,
                    'handlers'   => []
                ]);
        
                // Configurar el chat_id según el modo
                $chatId = ($modo === 'free') ? '-1001964901571' : '-1002059437384';
        
                $bot->sendPhoto([
                    'chat_id'  => $chatId,
                    'photo'    => fopen($imagePath, 'r'),
                    'caption'  => $messageText
                ]);
            }
        }



        Cache::flush();


       
           if ($request->input('status') === '2' && $request->input('modo') === 'plus') {
    
                // Enviar notificación solo a usuarios activos
                $currentUser = auth()->user(); // Obtén el usuario actual
    
                $users = User::where('id', '<>', $currentUser->id)
                    ->where(function ($query) {
                        $query->whereHas('subscriptions', function ($subscriptionQuery) {
                            $subscriptionQuery->where('name', 'señales') // Nombre del plan "señales"
                                ->where(function ($subQuery) {
                                    $subQuery->whereNull('ends_at') // Verificar suscripciones sin fecha de finalización
                                        ->orWhere('ends_at', '>', Carbon::now()); // Verificar suscripciones que no han expirado
                                });
                        });
                    })
                    ->get();
    
                $notification = new MessageSent($article);
    
                Notification::send($users, $notification);
            }else {
                // Obtén el usuario actual
                $currentUser = auth()->user();
        
                // Consulta todos los usuarios excepto el usuario actual
                $users = User::where('id', '<>', $currentUser->id)->get();
        
                // Despacha el Job para enviar notificaciones en cola
                dispatch(new SendNotificationJob($article, $users));
            }
        // if ($request->input('status') === '2') {
        //     $currentUser = auth()->user();
        
        //     $users = User::where('id', '<>', $currentUser->id);
        //   // Obtener el article desde la URL usando el modelo de enlace implícito
        // $article = $request->route('article');
    
        // // Verificar si se encontró el artículo y obtener el valor del campo 'modo'
        // $modo = $article ? $article->modo : null;
        //     if ($modo === 'free') {
        //         // Enviar a todos los usuarios para alertas gratuitas
        //         $users = $users->get();
        //     } else {
        //         // Obtener usuarios con suscripciones activas
        //         $users = $users->whereHas('subscriptions', function ($subscriptionQuery) {
        //             $subscriptionQuery->where('name', 'señales')
        //                 ->where(function ($subQuery) {
        //                     $subQuery->whereNull('ends_at')
        //                         ->orWhere('ends_at', '>', Carbon::now());
        //                 });
        //         })->get();
        //     }
        
        //     $notification = new MessageSent($article);
        
        //     Notification::send($users, $notification);
        // }


        // if ($request->input('status') === '2') {
        //     // Obtén el usuario actual
        //     $currentUser = auth()->user();
    
        //     // Consulta todos los usuarios excepto el usuario actual
        //     $users = User::where('id', '<>', $currentUser->id)->get();
    
        //     // Despacha el Job para enviar notificaciones en cola
        //     dispatch(new SendNotificationJob($article, $users));
        // }        

        return redirect()->route('admin.articles.edit', $article);        
    }
    
 

    public function edit(Article $article)
    {
        $this->authorize('author', $article);

        return view('admin.articles.edit', compact('article'));
    }



    public function update(ArticleRequest $request, Article $article)
    {
        $this->authorize('author', $article);
        $request->validate([
            'file' => 'required|image'
        ]);
        $article->update($request->all());

        if ($request->file('file')) {
            $url = Storage::put('articles', $request->file('file'));

            if ($article->image) {
                Storage::delete($article->image->url);

                $article->image->update([
                    'url' => $url
                ]);
            } else {
                $article->image()->create([
                    'url' => $url
                ]);
            }
        }

        // Obtener la URL de la imagen almacenada
        $imagePath = Storage::url($url);

        // Obtener todos los datos ingresados en el formulario
        $data = $request->except('_token', '_method');

        // Excluir ciertas claves de los datos
        $excludedKeys = ['file', 'status', 'modo', 'body']; // Agrega aquí las claves que deseas excluir
        $filteredData = Arr::except($data, $excludedKeys);

        // Convertir los datos filtrados en una cadena de texto
        $messageText = '';
        $messageText = '👉🏼 ACTUALIZADA ▶';

        // Obtener el valor de 'estado'
        $estadoValue = '';
        foreach ($filteredData as $key => $value) {
            if ($key === 'estado') {
                if ($value === 'En curso') {
                    $estadoValue = ' Abierta 💹';
                } elseif ($value === 'Positiva' || $value === 'Negativa') {
                    $estadoValue = ' Cerrada 🛑';
                } elseif ($value === 'Cancelada') {
                    $estadoValue = ' Cancelar ❌';
                } elseif ($value === 'Break even') {
                    $estadoValue = ' Break even 🔵';
                }
            }
        }
        
        // Concatenar el valor de 'estado' al lado del título
        $messageText .= $estadoValue . "\n\n";
        
        foreach ($filteredData as $key => $value) {
            if ($key === 'estado') {
                // No hagas nada, ya hemos manejado 'estado' antes
            } elseif ($key === 'orden') {
                // Asignar el emoji correspondiente a la orden
                if ($value === 'Buy') {
                    $messageText .= ' 📉 Buy' . "\n\n";
                } elseif ($value === 'Sell') {
                    $messageText .= ' 📈 Sell' . "\n\n";
                } elseif ($value === 'Buy Limit') {
                    $messageText .= ' 📉 Buy Limit' . "\n\n";
                } elseif ($value === 'Sell Limit') {
                    $messageText .= ' 📈 Sell Limit' . "\n\n";
                } elseif ($value === 'Buy Stop') {
                    $messageText .= ' 📉 Buy Stop' . "\n\n";
                } elseif ($value === 'Sell Stop') {
                    $messageText .= ' 📈 Sell Stop' . "\n\n";
                }
            } elseif ($key === 'RR') {
                // Asignar el emoji correspondiente a la orden
              if ($value === '1:1' || $value === '1:2' || $value === '1:3' || $value === '1:4' || $value === '1:5' || $value === '1:6') {
                $messageText .= "🔘 " . ucfirst($key) . ": " . $value . "\n\n";
             }
            } elseif ($key === 'title') {
                // Concatenar el título al mensaje
                $messageText .= "💎 #" . $value;
            } elseif ($key === 'entrada') {
                // Concatenar la entrada al mensaje
                $messageText .= "🚀 " . ucfirst($key) . ": " . $value . "\n\n";
            } elseif ($key === 'body') {
                // Agregar solo el contenido sin el título para el atributo 'body'
                $messageText .= $value . "\n";
            } elseif ($key === 'tp') {
                // Agregar solo el contenido sin el título para el atributo 'body'
                $messageText .= "🟢 " . ucfirst($key) . ": " . $value . "\n\n";
            } elseif ($key === 'sl') {
                // Agregar solo el contenido sin el título para el atributo 'body'
                $messageText .= "🔴 " . ucfirst($key) . ": " . $value . "\n\n";
            } else {
                // Concatenar el título y el contenido al mensaje para otras claves
                $messageText .= ucfirst($key) . ": " . $value . "\n\n";
            }
        }
        
        $messageText = strip_tags($messageText);

        // Enviar mensaje utilizando TeleBot
        // ...

if ($request->input('status') === '2') {

    // Verificar el modo
    $modo = $request->input('modo');

    if ($modo === 'free' || $modo === 'plus') {

        $botToken = env('TELEGRAM_BOT_TOKEN');


        // Enviar mensaje utilizando TeleBot
        $bot = new TeleBot([
            'token'      => $botToken,
            'name'       => 'forexgump_bot',
            'api_url'    => 'https://api.telegram.org/bot6316011921:AAETN-4kJn1qslxlAdmvhaSK57qSr_-gDN8/{METHOD}',
            'exceptions' => true,
            'async'      => false,
            'handlers'   => []
        ]);

        // Configurar el chat_id según el modo
        $chatId = ($modo === 'free') ? '-1001964901571' : '-1002059437384';

        $bot->sendPhoto([
            'chat_id'  => $chatId,
            'photo'    => fopen($imagePath, 'r'),
            'caption'  => $messageText
        ]);
    }
}

// ...

        Cache::flush();

        if ($request->input('status') === '2') {
            $currentUser = auth()->user();
        
            $users = User::where('id', '<>', $currentUser->id);
          // Obtener el article desde la URL usando el modelo de enlace implícito
        $article = $request->route('article');
    
        // Verificar si se encontró el artículo y obtener el valor del campo 'modo'
        $modo = $article ? $article->modo : null;
            if ($modo === 'free') {
                // Enviar a todos los usuarios para alertas gratuitas
                $users = $users->get();
            } else {
                // Obtener usuarios con suscripciones activas
                $users = $users->whereHas('subscriptions', function ($subscriptionQuery) {
                    $subscriptionQuery->where('name', 'señales')
                        ->where(function ($subQuery) {
                            $subQuery->whereNull('ends_at')
                                ->orWhere('ends_at', '>', Carbon::now());
                        });
                })->get();
            }
        
            $notification = new MessageSent($article);
        
            Notification::send($users, $notification);
        }
        

        // if ($request->input('status') === '2') {
        //     // Obtén el usuario actual
        //     $currentUser = auth()->user();
    
        //     // Consulta todos los usuarios excepto el usuario actual
        //     $users = User::where('id', '<>', $currentUser->id)->get();
    
        //     // Despacha el Job para enviar notificaciones en cola
        //     dispatch(new SendNotificationJob($article, $users));
        // }


        return redirect()->route('admin.articles.edit', $article)->with('info', 'La señal se actualizó con éxito');
    }



    public function destroy(Article $article)
    {

        $this->authorize('author', $article);

        $article->delete();

        Cache::flush();

        return redirect()->route('admin.articles.index', $article)->with('info', 'La señal se elimino con exito');
    }

    
}
