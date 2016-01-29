{if $errors.value|count > 0}
   {foreach from=$errors.value item="error" key="key"}
       <div class="alert alert-{$errors.type[$key]}">
       <button class="close" data-dismiss="alert"></button>
           <strong>!Atención!</strong> {$error}
       </div>
   {/foreach}          
{/if}