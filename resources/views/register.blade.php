<h4>Register your vehicle</h4>

<form action="/create" method="post">
    <div class="form-group">
        <label for="">Name</label>
        <input type="text" class="form-control" name="name" required>
    </div>

    <div class="form-group">
        <label for="">Engine Displacement</label>
        <div class="input-group">
            <input type="text" class="form-control" name="engine_displacement" placeholder="Ex: 1.2" required>
            <div class="input-group-append">
                <select name="engine_displacement_code" class="form-control">
                    @foreach ($type as $item)
                        <option value="{{ $item->code }}">{{ $item->code }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>

    <div class="form-group">
        <label for="">Engine Power</label>
        <div class="input-group">
            <input type="text" class="form-control" name="engine_power" placeholder="Ex: 1000" required>
            <div class="input-group-append">
                <span class="input-group-text" id="basic-addon2">HP</span>
            </div>
        </div>
    </div>

    <div class="form-group">
        <label for="">Price ($)</label>
        <input type="text" class="form-control" name="price" required>
    </div>

    <div class="form-group">
        <label for="">Location</label>
        <input type="text" class="form-control" name="location" required>
    </div>

    <button type="submit" class="btn btn-secondary">Register</button>
</form>