<div class='accordion-item'>
    <div class='accordion-header'>
      <button class='accordion-button {{ $attributes->get("class") }}' type='button' data-bs-toggle='collapse' data-bs-target='#{{ $id }}' aria-expanded='true' aria-controls='{{ $id }}'>
        {{ $header }}
      </button>
    </div>
    <div id='{{ $id }}' class='accordion-collapse collapse {{ $state ?? "" }}' data-bs-parent='#{{ $parent }}'>
      <div class='accordion-body'>
      {{ $slot }}
      </div>
    </div>
</div>