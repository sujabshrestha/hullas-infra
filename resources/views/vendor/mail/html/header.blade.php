<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="{{ asset(getSiteSetting('logo')) ?? '' }}" class="logo" alt="Hulas Steel">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
