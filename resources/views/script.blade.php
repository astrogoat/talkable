@inject('settings', 'Astrogoat\Talkable\Settings\TalkableSettings')

@if ($settings->enabled && ! blank($settings->site_id))
    <script>
        window._talkableq = window._talkableq || [];
        _talkableq.push(['init', { site_id: "{{ $settings->site_id }}" }]);

        window._talkableq.push(['authenticate_customer']);

        @if($settings->register_affiliate)
            window._talkableq.push(['register_affiliate', {}]);
        @endif
    </script>
    <script async src="//d2jjzw81hqbuqv.cloudfront.net/integration/clients/{{ $settings->site_id }}.min.js" type="text/javascript"></script>
@endif
