$(document).ready(function () {
  // Variable para controlar la carga
  let loading = false;

  // Función para cargar más artículos
  function loadMoreArticles() {
      if (!loading) {
          const currentPage = $('#load-more').data('page');
          const lastPage = $('#load-more').data('last-page');

          if (currentPage <= lastPage) {
              loading = true;
              $.ajax({
                  type: 'GET',
                  url: `/load-more-articles?page=${currentPage}`,
                  success: function (response) {
                      if (response.html.trim() !== '') {
                          $('#articles-container').append(response.html);
                          $('#load-more').data('page', currentPage + 1);
                      }
                  },
                  error: function (jqXHR, textStatus, errorThrown) {
                      console.error('AJAX Error:', textStatus, errorThrown);
                  },
                  complete: function () {
                      loading = false;
                  },
              });
          }
      }
  }

  // Detectar el scroll y cargar más artículos automáticamente
  $(window).scroll(function () {
      if ($(window).scrollTop() + $(window).height() >= $('#articles-container').height() - 300) {
          loadMoreArticles();
      }
  });

  // Inicializar la carga automática al cargar la página
  loadMoreArticles();
});


// Función para enviar la solicitud AJAX
function sendLikeRequest(articleId, type, $likeButton) {
  $.ajax({
    type: 'POST',
    url: `/articles/${articleId}/${type}`,
    data: {
      _token: csrfToken,
    },
    success: function(response) {
      if (response.success) {
        // Actualiza la cantidad total de "Me gusta" en la página
        const $likesCount = $likeButton.siblings('.likes-count');
        const $dislikesCount = $likeButton.siblings('.dislikes-count');
        $likesCount.text(response.likesCount);
        $dislikesCount.text(response.dislikesCount);

        // Actualiza el estado en el almacenamiento local si lo deseas
        localStorage.setItem(`likeStatus-${articleId}`, type);
        updateLikeDislikeCounts(articleId);
      }
    },
    error: function(error) {
      // Manejar errores, si es necesario
    }
  });
}

// Obtener el estado de los botones al cargar la página
async function restoreLikeDislikeState() {
  const likeButtons = document.querySelectorAll('.like-button');
  const dislikeButtons = document.querySelectorAll('.dislike-button');

  likeButtons.forEach(async button => {
    const articleId = button.dataset.articleId;
    const response = await getLikeDislikeState(articleId, 'like');

    if (response.hasLiked) {
      button.classList.add('like-selected');
    }
  });

  dislikeButtons.forEach(async button => {
    const articleId = button.dataset.articleId;
    const response = await getLikeDislikeState(articleId, 'dislike');

    if (response.hasLiked) {
      button.classList.add('dislike-selected');
    }
  });

  // Función para obtener el estado desde el servidor
  async function getLikeDislikeState(articleId, type) {
    try {
      const response = await fetch(`/articles/${articleId}/${type}/has-liked`, {
        method: 'GET',
      });
      const data = await response.json();
      return data;
    } catch (error) {
      // Manejar errores, si es necesario
    }
  }
}

// Ejecutar restoreLikeDislikeState() después de cargar el documento
$(document).ready(function() {
  restoreLikeDislikeState();
});

// Manejo del clic en los botones "Me gusta" y "No me gusta"
$('#articles-container').on('click', '.like-button, .dislike-button', function(e) {
  e.preventDefault();
  const articleId = $(this).data('article-id');
  const type = $(this).data('type');

  const $likeButton = $(this).closest('.like-dislike').find('.like-button');
  const $dislikeButton = $(this).closest('.like-dislike').find('.dislike-button');

  // Verifica si el botón actual tiene la clase `${type}-selected`
  if ($(this).hasClass(`${type}-selected`)) {
    $(this).removeClass(`${type}-selected`);
    sendLikeRequest(articleId, 'cancel', $likeButton);

  } else {
    $likeButton.removeClass('like-selected');
    $dislikeButton.removeClass('dislike-selected');
    $(this).addClass(`${type}-selected`);
    sendLikeRequest(articleId, type, $likeButton);
  }
});


// Función para actualizar los valores de "Me gusta" y "No me gusta" para un artículo específico
function updateLikeDislikeCounts(articleId) {
  // Asegúrate de que articleId esté definido y sea un valor válido.
  if (articleId) {
    $.ajax({
      type: 'GET',
      url: `/articles/${articleId}/counts`,
      success: function(response) {
        // Actualiza los conteos de "Me gusta" y "No me gusta en tiempo real
        // Usando los valores en la respuesta.
        const likesCount = response.likesCount;
        const dislikesCount = response.dislikesCount;

        // Actualiza los elementos HTML con los nuevos conteos.
        const likesCountElement = $(`#likes-count-${articleId}`);
        const dislikesCountElement = $(`#dislikes-count-${articleId}`);
        likesCountElement.text(likesCount);
        dislikesCountElement.text(dislikesCount);
      },
      error: function(error) {
        // Manejar errores, si es necesario
      }
    });
  }
}

// Configurar un intervalo para actualizar los valores cada ciertos segundos
setInterval(function() {
  // Itera sobre todos los elementos con clase 'like-dislike' para obtener los IDs de los artículos
  $('.like-dislike').each(function() {
    const articleId = $(this).data('article-id');
    updateLikeDislikeCounts(articleId);
  });
}, 1000);


