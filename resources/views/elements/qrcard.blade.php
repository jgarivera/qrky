<div>
        <div class="uk-card uk-card-default uk-card-hover uk-card-small qrky-border">
            <div class="uk-card-body">
                <div class="uk-grid uk-grid-small"> 
                    <div class="uk-width-auto">
                        <h4>{{$qrc['name']}}</h4>
                    </div>
                    
                    <div class="uk-card-badge uk-margin-remove uk-label qrky-bg" style="text-transform: none;">
                        <i class="fas fa-hashtag"></i>{{$qrc['id']}}
                    </div>
                </div>
                <p class="uk-text-meta uk-margin-remove-top">
                    <i class="fas fa-dna"></i> {{$qrc['type']}} |
                    <i class="fas fa-sign"></i> {{$qrc['status']}} |
                    <i class="fas fa-map-marked-alt"></i> {{$qrc['loc']}}
                </p>
                
                <p>{{$qrc['desc']}}</p>
            </div>

            <div class="uk-card-footer">
                <a href="#modal-{{$qrc['id']}}" class="uk-button uk-button-text" uk-toggle="target: #modal-{{$qrc['id']}}"><i class="fas fa-pencil-alt"></i> Edit Content</a>
            </div>
            
        </div>        
    </div>

    