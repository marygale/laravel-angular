@if ($errors->any())
    <script>
        (function () {
                    @foreach ($errors->messages() as $k => $error)
            var element = $('[name={{$k}}');
            var error_container = $('.error-container-{{$k}}');
            if (error_container.length)
            {
                element
                        .addClass('validation-error')
                        .change(function () {
                            $(this).removeClass('validation-error');
                        });
                <?php $count = count($error); ?>
                @for($i = 0; $i < $count; $i++)
                    error_container.append("<p class='validation-message'>{{$error[$i]}}</p>");
                @endfor
            }
            else
            {
                element
                        .addClass('validation-error')
                        .change(function () {
                            $(this).removeClass('validation-error');
                        })
                        .after("<p class='validation-message'>{{$error[0]}}</p>");
                <?php $count = count($error); ?>
                @for($i = 0; $i < $count; $i++)
                    element.append("<p class='validation-message'>{{$error[$i]}}</p>");
                @endfor
            }
            @endforeach
        })();
    </script>
@endif