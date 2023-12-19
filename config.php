<?php
$doc = 'डॉ. दीपक चोपड़ा';
$product = 'Fixit';
$country = 'भारत';
$integration = <<<HTML

<input type="hidden" name="utm_source" value="{utm_source}">
<input type="hidden" name="utm_content" value="{utm_content}">
<input type="hidden" name="utm_campaign" value="{utm_campaign}">
<input type="hidden" name="utm_term" value="{utm_term}">
<input type="hidden" name="utm_medium" value="{utm_medium}">
<input type="hidden" name="clickid" value="{subid}">
<input type="hidden" name="pixel" value="{pixel}">
<input type="hidden" name="aff" value="lemon">
<input type="hidden" name="offer" value="29c08ecf-465e-4cea-844e-8c5d7d239390">
<input type="hidden" name="country" value="IN">
<input type="hidden" name="kt_campaign" value="{campaign_id}">
<input type="hidden" name="kt_offer" value="{offer_id}">
<input type="hidden" name="offer_name" value="Fixit">

HTML;