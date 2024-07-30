@props(['status'])

@if ($status == 1)
    <x-icons.present />
@endif
@if ($status == 2)
    <x-icons.absent />
@endif
@if ($status == 3)
    <x-icons.hasGoHome />
@endif
@if ($status == 4)
    <x-icons.beRightback />
@endif
@if ($status == 5)
    <div class="text-orange-500">
        <x-icons.qrcode />
    </div>
@endif
@if (!$status)
    <x-icons.quwstion />
@endif
