
<x-app-layout>
  <div style="display: flex; justify-content: center; align-items: center; height: 100vh;">
    <div style="background-color: #f8f8f8; padding: 20px; border-radius: 10px; text-align: center;">
      <h3 style="margin-bottom: 10px;">Únete a nuestro grupo de Telegram VIP</h3>
      <p style="margin-bottom: 20px;">Haz clic en el botón de abajo para unirte</p>
      <a href="{{ $telegramGroupInviteLinkPlus }}" onclick="getTelegramIdAndRedirect()" style="display: flex; justify-content: center; align-items: center;">
        <img src="{{ asset('img/telegrama.png') }}" alt="Icono de Telegram" style="width: 50px; margin-right: 10px;">
        <span style="font-size: 16px;">Únete al grupo</span>
      </a>
    </div>
  </div>

  <!-- <script>

  function getTelegramIdAndRedirect() {
    const botToken = '6316011921:AAETN-4kJn1qslxlAdmvhaSK57qSr_-gDN8';



    function getUpdates() {
      fetch(`https://api.telegram.org/bot${botToken}/getUpdates`)
        .then(response => response.json())
        .then(data => {
          if (data.result && data.result.length > 0) {
            data.result.forEach(update => {
              const message = update.message;
              if (message && message.new_chat_members) {
                // Si es una actualización de nuevos miembros, obtén el ID del primer nuevo miembro
                const chatId = message.new_chat_members[0].id;
                
                console.log('ID del usuario:', chatId);

                // Aquí puedes agregar el código para enviar el ID de Telegram al controlador y redirigir si es necesario
                // Por ejemplo, crear un formulario oculto y enviar el ID a través de una solicitud POST
                var form = document.createElement('form');
                form.method = "POST";
                form.action = "{{ route('unirte-al-grupo') }}";
                var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
                form.innerHTML = '<input type="hidden" name="_token" value="' + csrfToken + '">' +
                  '<input type="hidden" name="telegram_id" value="' + chatId + '">';
                document.body.appendChild(form);
                form.submit();
              }
            });
          }
        })
        .catch(error => {
          console.error('Error al obtener actualizaciones:', error);
          // Redirigir al grupo de Telegram en caso de error
        })
        .finally(() => {
          // Realiza la siguiente solicitud después de unos segundos
          setTimeout(getUpdates, 3000); // Por ejemplo, espera 3 segundos antes de la próxima solicitud
        });
    }

    // Inicia el polling
    getUpdates();
  }
  
</script> -->

</x-app-layout>
