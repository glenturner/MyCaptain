

<div class="navbar-fixed">
    <nav class="blue" role="navigation">
        <div class="nav-wrapper container">
            <a id="logo-container" href="#" class="brand-logo">MyCaptain</a>
            <form>
                <div class="input-field right" style="width: 60%">
                    <input id="search" type="search" id="autocomplete-input" class="autocomplete" required>
                    <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                    <i class="material-icons">close</i>
                </div>
            </form>
        </div>
    </nav>
</div>

<script>
        $(document).ready(function() {
$('input.autocomplete').autocomplete({
data: {
"Apple": null,
"Microsoft": null,
"Glen Turner": 'https://placehold.it/250x250'
},
limit: 20, // The max amount of results that can be shown at once. Default: Infinity.
onAutocomplete: function(val) {
// Callback function when value is autcompleted.
},
minLength: 1, // The minimum length of the input for the autocomplete to start. Default: 1.
});

        });
</script>