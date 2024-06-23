self.addEventListener('push', (event) => {
    console.log('Evento push recibido:', event);

    try {
        const data = event.data.json();
        console.log('Datos del evento push:', data);

        const title = 'Forex Gump';
        const bodyContent = `Alerta: ${data.article.title}`;

        const options = {
            body: bodyContent,
            icon: `img/iconoforexgump.png`
        };

        event.waitUntil(
            self.registration.showNotification(title, options)
        );
    } catch (error) {
        console.error('Error al procesar el evento push:', error);
    }
});
