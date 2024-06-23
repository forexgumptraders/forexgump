const currencyList = document.getElementById("currency-list");

  const currencies = ["EUR", "JPY", "GBP", "AUD", "CAD", "CHF", "NZD", "ARS"];

  async function fetchCurrencyPrices() {
    try {
      const response = await fetch("https://api.exchangerate-api.com/v4/latest/USD");
      const data = await response.json();

      currencyList.innerHTML = "";

      for (const currency of currencies) {
        let rate;
        let imageSrc = '';
        if (currency === "BTC" || currency === "ETH") {
          const cryptoResponse = await fetch("https://api.coingecko.com/api/v3/simple/price?ids=bitcoin,ethereum&vs_currencies=usd");
          const cryptoData = await cryptoResponse.json();

          rate = currency === "BTC" ? cryptoData.bitcoin.usd : cryptoData.ethereum.usd;
        } else {
          rate = data.rates[currency];
        }

        const listItem = document.createElement("li");

        if (currency === "BTC") {
          imageSrc = "img/bitcoin.png"; // Ruta a la imagen de Bitcoin
        } else if (currency === "ETH") {
          imageSrc = "img/etherum.png"; // Ruta a la imagen de Ethereum
        } else if (currency === "ARS") {
          imageSrc = "img/argentina.png"; // Ruta a la imagen de ARS
        } else if (currency === "CAD") {
          imageSrc = "img/canada.png"; // Ruta a la imagen de CAD
        } else if (currency === "NZD") {
          imageSrc = "img/nueva-zelanda.png"; // Ruta a la imagen de NZD
        }else if (currency === "CHF") {
          imageSrc = "img/suiza.png"; // Ruta a la imagen de NZD
        } else if (currency === "AUD") {
          imageSrc = "img/australia.png"; // Ruta a la imagen de NZD
        } else if (currency === "GBP") {
          imageSrc = "img/reino-unido.png"; // Ruta a la imagen de NZD
        }
        else if (currency === "JPY") {
          imageSrc = "img/japon.png"; // Ruta a la imagen de NZD
        }
        else if (currency === "EUR") {
          imageSrc = "img/union-europea.png"; // Ruta a la imagen de NZD
        }

        const image = document.createElement("img");
        image.src = imageSrc;
        image.alt = currency;

        const infoContainer = document.createElement("div");
        infoContainer.className = "currency-info";

        const title = document.createElement("span");
        title.textContent = currency;

        const rateText = document.createElement("span");
        rateText.textContent = `${rate.toFixed(2)}`;

        infoContainer.appendChild(title);
        infoContainer.appendChild(rateText);

        listItem.appendChild(image);
        listItem.appendChild(infoContainer);
        currencyList.appendChild(listItem);
      }

      const carousel = $('.currency-carousel').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        prevArrow: '<button type="button" class="slick-prev">Previous</button>',
        nextArrow: '<button type="button" class="slick-next">Next</button>',
        autoplay: true,
        autoplaySpeed: 3000,
        pauseOnHover: false,
        responsive: [{
          breakpoint: 768,
          settings: {
            slidesToShow: 1
          }
        }]
      });

      let isDragging = false;

      carousel.on('mousedown', function() {
        isDragging = true;
        carousel.addClass('grabbing-cursor');
      });

      carousel.on('mouseup', function() {
        isDragging = false;
        carousel.removeClass('grabbing-cursor');
      });

      setInterval(function() {
        if (!isDragging) {
          carousel.slick('slickNext');
        }
      }, 3000);

    } catch (error) {
      console.error("Error al obtener los datos de divisas:", error);
    }
  }

  fetchCurrencyPrices();




