<?php


use function Livewire\Volt\{state, mount};

state(['word', 'word_lower']);
mount(function () { 
    $this->word_lower = strtolower($this->word);
});    
?>

<div>
    <p>{{ $word_lower }}</p>
</div>
