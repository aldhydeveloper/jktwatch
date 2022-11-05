<style>
    .btn-floating {
        background: transparent;
        position: fixed;
        right: 25px;
        bottom: 25px;
        /* width: 30px; */
        z-index: 999;
    }
</style>

<a href="https://wa.me/6281222998298?text=Hello%20I%20want%20buy%20some%20watch%20{{ @$collections->name }}">
    <div class="btn-floating">
        <img src="{{ asset('img/wa_icon.png') }}" width="65" alt="whatsapp">
    </div>
</a>
