<!-- Info panel -->
<div class="uk-card uk-card-default qrky-border">
    <div class="uk-card-body">
        <h4 class="uk-text-center">QR Code Information</h4>

            <ul class="uk-list">
                <!-- Name -->
                <li>
                    <span class="uk-text-meta uk-text-uppercase">
                        <i class="fas fa-tag"></i> Name
                    </span>
                    <p class="uk-margin-remove-top">
                        <input
                            class="qrky-form qrky-edit-field uk-input uk-form-medium"
                            id="form-name"
                            type="text"
                            autocomplete="off"
                            placeholder="Who is this QR code?"
                            value="{{ $qr_name }}">
                    </p>
                </li>
                
                <!-- Content type -->
                <li>
                    <span class="uk-text-meta uk-text-uppercase">
                        <i class="fas fa-dna"></i> Content Type 
                        <i class="far fa-question-circle qrky-icon" uk-tooltip="title: Content type determines the visual style of the QR code.; pos: right;"></i>
                    </span>
                    <p class="uk-margin-remove-top">
                        <select
                            class="qrky-form qrky-edit-field uk-select"
                            id="form-content-type">
                                @for($i = 0; $i < sizeof(QrkyFactory::types()); $i++)
                                    <option {{ $qr_c_type == $i ? 'selected' : '' }}>{{ QrkyFactory::types()[$i] }}</option>
                                @endfor
                        </select>
                    </p>
                </li>

                <!-- Content -->
                <li>
                    <span class="uk-text-meta uk-text-uppercase"><i class="fas fa-box-open"></i> Content</span>
                    <p class="uk-margin-remove-top">
                        <textarea 
                            class="qrky-form qrky-edit-field uk-textarea"
                            id="form-content"
                            rows="2"
                            placeholder="What does this QR code contain?">{{ $qr_content }}</textarea>
                    </p>
                </li>
                
                <!-- Description -->
                <li>
                    <span class="uk-text-meta uk-text-uppercase">
                        <i class="fas fa-quote-right"></i> Description
                    </span>
                    <p class="uk-margin-remove-top">
                        <textarea class="qrky-form qrky-edit-field uk-textarea" id="form-desc" rows="1" placeholder="What is this QR code for?">{{ $qr_desc }}</textarea>
                    </p>
                </li>
                
                <!-- Location -->
                <li>
                    <span class="uk-text-meta uk-text-uppercase">
                        <i class="fas fa-map-marked-alt"></i> Location
                    </span>
                    <p class="uk-margin-remove-top">
                        <input class="qrky-form qrky-edit-field uk-input uk-form-medium" id="form-loc" placeholder="Where is this QR code?" type="text" autocomplete="off" value="{{ $qr_loc }}">
                    </p>
                </li>

                <!-- Deployment Date -->
                <li>
                    <span class="uk-text-meta uk-text-uppercase">
                        <i class="fas fa-sign"></i> Deployment Date
                    </span>
                    <p class="uk-margin-remove-top">
                        <input
                            class="qrky-form qrky-edit-field uk-input uk-form-medium"
                            id="form-d-date"
                            name="{{ $dep_name }}"
                            type="text"
                            placeholder="When was this QR code deployed?"
                            @if($qr_d_date) value="{{ $qr_d_date }}" @endif
                            readonly>
                    </p>
                </li>

            </ul>
    </div>
</div>

@if($edit_mode)
    </div>
@endif

@if($edit_mode)
    <!-- Preview panel -->
    <div class="uk-width-1-5@m uk-flex-first">
    <div class="uk-card uk-card-default qrky-border uk-align-center uk-height-1-1" style="min-width: 200px; padding-top: 30px; padding-bottom: 1px;">    
        <h4 class="uk-text-center">
            <span>Preview</span>
        </h4>
        <p class="uk-text-center uk-margin-remove">
            <span class="uk-text-small" style="color: #D4AF37;"><i class="fas fa-crown"></i> {{ $qr_owner }}</span><br>
        </p>
        <img id="preview" class="uk-align-center" src="data:image/png;base64, {!! base64_encode($qr_preview) !!}" style="max-width: 170px; margin-top: 8px; margin-bottom: 6px;" uk-img>
        <p class="uk-text-center uk-margin-remove">
            <span class={{ $qr_status_class }}>
                <i class="fas fa-flag "></i> <span class="uk-text-small">{{ $qr_status }}</span><br>
            </span>
            <i class="fas fa-hashtag" style="color: #9F6DA6;"></i><code style="color: #9F6DA6;">{{ $qr_id }}</code>
        </p>
        <hr>
        <p class="uk-text-center">
            <span class="uk-text-center">Scan Information</span>
            <span class="uk-text-small uk-text-muted"> 
                <br>Total scans: {{ $qr_t_scans }}
                <br>Unique scans: {{ $qr_u_scans }}
            </span>
        </p>
        <hr>
        <p class="uk-text-center">
            <span class="uk-text-center">Date Information</span><br>
            <span class="uk-text-small uk-text-muted" uk-tooltip="title: Creation date of this QRC.; pos: right;"><i class="fas fa-star"></i> {{ $qr_c_date }} 
            </span><br>
            <span class="uk-text-small uk-text-muted" uk-tooltip="title: Last modified date of this QRC.; pos: right;"><i class="fas fa-edit"></i> {{ $qr_m_date }} 
            </span><br>
            <span class="uk-text-small uk-text-muted" uk-tooltip="title: Deployment date of this QRC.; pos: right;"><i class="fas fa-sign"></i> {{ $qr_d_date }} 
            </span>
        </p>
    </div>
@endif