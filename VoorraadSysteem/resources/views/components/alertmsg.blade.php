<div>
    @if (session()->has('success'))
        <div id="success" class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif

    @if (session()->has('error'))
        <div id="error" class="alert alert-danger">
            {{ session()->get('error') }}
        </div>
    @endif

    @if (session()->has('warning'))
        <div id="warnings" class="alert alert-warning">
            {{ session()->get('warning') }}
        </div>
    @endif
</div>

<script>
    const success = document.getElementById('success');
    const error = document.getElementById('error');
    const warning = document.getElementById('warning');

    if (success) {
        success.addEventListener('click', () => {
            success.style.display = 'none';
        });
    } else if (error) {
        error.addEventListener('click', () => {
            error.style.display = 'none';
        });
    } else if (warning) {
        warning.addEventListener('click', () => {
            warning.style.display = 'none';
        });
    }
</script>
