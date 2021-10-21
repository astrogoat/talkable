@inject('settings', 'Astrogoat\Talkable\Settings\TalkableSettings')

@if ($settings->enabled && ! blank($settings->site_id))
    <script>
        window._talkableq = window._talkableq || [];
        _talkableq.push(['init', { site_id: "{{ $settings->site_id }}" }]);

        window._talkableq.push(['authenticate_customer']);

        window._talkableq.push(['register_affiliate', {}]);
    </script>
    <script async src="{{ $settings->script_url }}" type="text/javascript"></script>
@endif
