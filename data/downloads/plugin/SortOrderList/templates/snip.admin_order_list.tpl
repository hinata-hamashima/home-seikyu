&nbsp;&nbsp;表示順
<!--{assign var=key value="search_sort_order"}-->
<span class="attention"><!--{$arrErr[$key]}--></span>
<select name="<!--{$arrForm[$key].keyname}-->" style="<!--{$arrErr[$key]|sfGetErrorColor}-->">
<option value="">更新日（新しい順）</option>
<!--{html_options options=$arrSortOrder selected=$arrForm[$key].value}-->
</select>