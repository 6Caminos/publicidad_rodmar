<!-- card-modal.blade.php -->

<div class="card">
     <div class="card-title">
       <br>
        <h2>
            {{ $item['title'] }}
        </h2>
    </div> 
    
    <div class="card__image-holder">
        <img class="card__image" src="{{ $item['image'] }}" alt="{{ $item['alter'] }}" />
    </div>
  
    <div class="card-flap">
        <div class="card-description">
            {{ $item['short_description'] }}
        </div>
        <div class="card-flap flap2">
            <div class="card-actions">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter{{$i}}">
                    Read more
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter{{$i}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered custom-centered-modal" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">{{ $item['title'] }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="card__image-holder">
        <img class="card__image" src="{{ $item['image'] }}" alt="image{{ $i }}" />
    </div>
            <div class="modal-body">
                <p>{{ $item['full_description'] }}</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="../../../public/js/altura.js"></script>