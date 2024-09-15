    <script>
        // Example function to show error when executing prompt
        document.querySelector('.btn-primary').addEventListener('click', function() {
            document.querySelector('.alert').style.display = 'block';
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/7.3.0/tinymce.min.js"></script>

    </body>

    </html>


    <script>
        $(function() {
            tinymce.init({
                selector: '#postEditor',
                height: 500,
                images_upload_base_path: '{{ asset('public/uploads/blog') }}',
                relative_urls: false,
                branding: false,
                rel_list: [{
                        title: 'None',
                        value: ''
                    },
                    {
                        title: 'Nofollow',
                        value: 'nofollow'
                    },
                    {
                        title: 'Noreferrer',
                        value: 'noreferrer'
                    }
                ],
                target_list: [{
                        title: 'None',
                        value: ''
                    },
                    {
                        title: 'Same page',
                        value: '_self'
                    },
                    {
                        title: 'New page',
                        value: '_blank'
                    },
                    {
                        title: 'Lightbox',
                        value: 'lightbox'
                    }
                ],
                default_link_target: '_blank',
                plugins: 'advlist autolink lists link image charmap hr anchor pagebreak ' +
                    'searchreplace wordcount visualblocks visualchars code fullscreen ' +
                    'insertdatetime media nonbreaking save table contextmenu directionality ' +
                    'emoticons template paste textcolor colorpicker textpattern imagetools codesample',
                toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter ' +
                    'alignright alignjustify | bullist numlist outdent indent | link image | codesample | ' +
                    'forecolor',
                image_class_list: [{
                        title: 'None',
                        value: ''
                    },
                    {
                        title: 'Responsive',
                        value: 'img-fluid'
                    }
                ],
                image_advtab: true,
                tinyMCE_suffix: '.min',
                tinyMCEURL: '{{ asset('vendors/tinymce') }}'
            });
        });
    </script>
    </body>

    </html>
