<div>
    <iframe x-ref="mediaFrame" class="rounded-lg" style="min-height: 600px"
    src="{{ url('/storage/' . $record->pdf) }}" width="100%" height="100%"
    @load="loading = false"></iframe>
</div>
