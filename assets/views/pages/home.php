<!-- extend layouts/layout -->

<!-- block contents -->
<section class="flex flex-col gap-3 md:justify-center item-center h-screen text-center">
    <app-welcome></app-welcome>
    <app-note class="note info mt-10" title="Disclaimer" note="This is a personal project of mine. It is meant for fun and educational purposes only."></app-note>
    <app-note class="note warning mt-5" title="Warning">
        <p>
            This project is still in progress. Some pages and features are not yet available.
            However, you can still play with it.
            Go, try and build something.
        </p>
        <p>
            For bugs and feature requests, you may visit the
            <a href="https://github.com/nadlambino/inspira-framework" target="_blank">repository</a>.
        </p>
    </app-note>
    <ul class="flex flex-wrap justify-center gap-5 md:gap-10 w-full mt-5 pb-5">
        <li>Router</li>
        <li>Middleware</li>
        <li>Controller</li>
        <li>View</li>
        <li>Model</li>
        <li>Service Container</li>
        <li>Config & Env</li>
        <li>Collection</li>
        <li>Error Page</li>
    </ul>
</section>
<!-- endblock -->
