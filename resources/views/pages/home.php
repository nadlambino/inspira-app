<!-- extend layouts/layout -->

<!-- block contents -->
<section class="flex flex-col gap-3 md:justify-center item-center h-screen text-center">
    <h1 class="text-5xl font-thin text-slate-700 text-center relative">
        <span class="text-slate-400 font-extrabold">Welcome to</span>
        <span class="font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-green-500 to-blue-600">
            Inspira Framework
        </span>
        <img src="<?= base_url('icon.png')?>" alt="Icon" class="w-10 h-10 inline" />
    </h1>
    <h3 class="text-center text-4xl text-slate-400 font-thin">
        a simple PHP MVC framework.
    </h3>
    <div class="note info mt-10">
        <h1>Disclaimer</h1>
        <p>
            This is a personal project of mine. It is meant for fun and educational purposes only.
        </p>
    </div>
    <div class="note warning mt-5">
        <h1>Warning</h1>
        <p>
            This project is still in progress. Some pages and features are not yet available.
            However, you can still play with it.
            Go, try and build something.
        </p>
        <p>
            For bugs and feature requests, you may visit the
            <a href="https://github.com/nadlambino/inspira-framework" target="_blank">repository</a>.
        </p>
    </div>
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
