@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Essential Edu')
<img src="{{ 'https://tumbara.id/storage/images/logo/logo-tumbara-v-website.png' }}" class="logo" alt="PT Tumbara">
essentialedu
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
