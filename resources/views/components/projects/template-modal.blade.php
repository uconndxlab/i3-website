@props([
    'modalId',
    'title',
    'links' => [],
    'badges' => []
])

<div class="modal fade p-0 text-dark" id="{{ $modalId }}" tabindex="-1" role="dialog" aria-labelledby="{{ $title }}" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <!--Content-->
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">{{ $title }}</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!--Body-->
            <div class="modal-body">
                @if ( $badges )
                <p>
                    @foreach($badges as $badge)
                        <span class="badge pt-2 me-2 mb-2 text-bg-{{ $badge['type'] }}">{{ $badge['text'] }}</span>
                    @endforeach
                </p>
                @endif
                {{ $slot }}
            </div>

            @if ( $links )
            <div class="modal-footer">
                @foreach ($links as $link)
                    <a href="{{ $link['url'] }}" target="_blank" class="{{ isset($link['class']) ? $link['class'] : 'btn btn-primary' }}">{{ $link['text'] }}</a>
                @endforeach
            </div>
            @endif
        </div>
    </div>
</div>