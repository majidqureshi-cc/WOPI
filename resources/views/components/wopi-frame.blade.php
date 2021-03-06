<style type="text/css">
    #office_frame {
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        margin: 0;
        border: none;
        display: block;
    }
</style>
<form id="office_form" name="office_form" style="display: none;" target="office_frame" action="{!! $url !!}" method="post">
    <input name="access_token" value="{!! $access_token !!}" type="text" />
    <input name="access_token_ttl" value="{!! $ttl !!}" type="text" />
    {{$slot}}
</form>

<span id="frameholder"></span>

<script type="text/javascript">
    function submitOfficeForm () {
        var frameholder = document.getElementById('frameholder');
        var office_frame = document.createElement('iframe');
        office_frame.name = 'office_frame';
        office_frame.id = 'office_frame';
    
        // The title should be set for accessibility
        office_frame.title = 'Office Frame';
    
        // This attribute allows true fullscreen mode in slideshow view
        // when using PowerPoint's 'view' action.
        office_frame.setAttribute('allowfullscreen', 'true');
    
        // The sandbox attribute is needed to allow automatic redirection to the O365 sign-in page in the business user flow
        office_frame.setAttribute('sandbox', 'allow-scripts allow-same-origin allow-forms allow-popups allow-top-navigation allow-popups-to-escape-sandbox');
        frameholder.appendChild(office_frame);
    
        document.getElementById('office_form').submit();
    }
    submitOfficeForm();
</script>
