<h4>List of vehicle</h4>
@foreach ($vehicles as $item)
    <div class="py-2 mb-3" style="background: #fff1f1;border-radius: 5px;">
        <div class="d-flex">
            <div class="col col-5">
                <div>
                    #{{ $item->id }}
                </div>
                <div>
                    <h4 class="mb-0 mt-1">{{ $item->name }}</h4>
                    <div>{{ $item->location }}</div>
                </div>
            </div>
            <div class="col">
                <div style="font-size: 14px;">
                    Engine Displacement / Power
                </div>
                <div class="mt-2" style="
                    font-size: 18px;
                    font-weight: 700;">
                    {{ $item->engine_displacement }}{{ $item->engine_displacement_code }} /
                    {{ $item->engine_power }} HP
                </div>
            </div>
            <div class="col col-3 text-center">
                <div>
                    Price
                </div>
                <div class="mb-2" style="font-size: 22px;
                font-weight: 500;">
                    ${{ $item->price }}
                </div>
            </div>
        </div>
        
    </div>
@endforeach