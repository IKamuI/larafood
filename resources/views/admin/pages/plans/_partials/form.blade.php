@include('admin.includes.alerts')
@csrf
<div class="form-group">
<input type="text" name="name" class="form-control" placeholder="Nome:" value="{{ $plan->name ?? old('name') }}">
</div>
<div class="form-group">
    <input type="text" name="price" class="form-control" placeholder="Preço:" value="{{ $plan->price ?? old('price') }}">
</div>
<div class="form-group">
    <input type="text" name="description" class="form-control" placeholder="Descrição:" value="{{ $plan->description ?? old('description') }}">
</div>
<div class="form-group">
    <button type="submit" class="btn btn-dark">Enviar</button>
</div>
