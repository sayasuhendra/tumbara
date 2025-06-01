<div>
    @php
                // Extract the YouTube video ID from the URL
                $queryString = parse_url($record->link, PHP_URL_QUERY);
                parse_str($queryString, $queryParams);
                $youtubeId = $queryParams['v'] ?? '';
            @endphp
    <iframe x-ref="mediaFrame" class="rounded-lg" width="100%"
                        src="https://www.youtube.com/embed/{{ $youtubeId }}"
                        frameborder="0"
                        style="aspect-ratio: 16 / 9;"
                        allowfullscreen></iframe>
</div>
