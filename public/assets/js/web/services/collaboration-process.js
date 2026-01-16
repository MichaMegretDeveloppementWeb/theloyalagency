document.addEventListener('DOMContentLoaded', function() {

    const timelineItems = document.querySelectorAll('#collaboration_process .timeline_item');

    if (!timelineItems.length) return;

    timelineItems.forEach((item, index) => {

        const rect = item.getBoundingClientRect();
        const isAboveViewport = rect.bottom < 0;
        const isInViewport = rect.top < window.innerHeight && rect.bottom > 0;

        if (isAboveViewport) {
            item.classList.add('no-animation');
            return;
        }

        if (isInViewport) {
            setTimeout(() => {
                item.classList.add('revealed');
            }, 150 + (index * 100));
            return;
        }

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    setTimeout(() => {
                        item.classList.add('revealed');
                    }, index * 100);
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.2,
            rootMargin: '0px 0px -50px 0px'
        });

        observer.observe(item);

    });

});
