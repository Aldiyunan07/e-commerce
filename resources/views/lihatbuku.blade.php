<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- Include CSS -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <style>
        #pdf-render {
            width: 100%;
        }
    </style>
    <title>{{ $buku->name }}</title>
</head>
<body style="background-color: #202124;padding-bottom: 3.7rem;">
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: rgba(45,46,49,.96);">
        <div class="container">
            <a class="navbar-brand line-clamp-1" href="#">{{ $buku->name }}</a>
            <div class="collapse navbar-collapse" id="navbarNav">
            {{-- <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
              </li>
            </ul> --}}
            </div>
        </div>
    </nav>
    <nav class="p-2 fixed-bottom" style="background-color: rgba(45,46,49,.96);">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-12 col-lg-5 d-flex justify-content-center" style="column-gap: 0.5rem">
                    <a href="#" role="button" id="prev-page" class="text-decoration-none d-flex justify-content-center">
                        <i class="bi bi-arrow-left-circle fs-3 text-white"></i>
                    </a>
                    <a href="#" role="button" id="next-page" class="text-decoration-none d-flex justify-content-center">
                        <i class="bi bi-arrow-right-circle fs-3 text-white"></i>
                    </a>
                    <div class="d-flex align-items-center text-white" style="column-gap: 0.2rem">Page <span id="page-num"></span> of <span id="page-count"></span></div>
                </div>
            </div>
        </div>
    </nav>
    <div style="height: 3.3rem"></div>
    <div class="container">
        <div class="row justify-content-center px-0">
            <div class="col-12 col-lg-9 d-flex justify-content-center px-0">
                <canvas id="pdf-render"></canvas>
            </div>
        </div>
    </div>


    <script src="https://mozilla.github.io/pdf.js/build/pdf.js"></script>
    <script>
        const url = '{{ $buku->ebook }}';

        let pdfDoc = null,
            pageNum = 1,
            pageIsRendering = false,
            pageNumIsPending = null;

        const scale = 1.5,
            canvas = document.querySelector('#pdf-render'),
            ctx = canvas.getContext('2d');
        // Render the page
        const renderPage = num => {
            pageIsRendering = true;

            // Get Page
            pdfDoc.getPage(num).then(page => {
                // Set Scale
                const viewport = page.getViewport({ scale });
                canvas.height = viewport.height;
                canvas.width = viewport.width;

                const renderCtx = {
                    canvasContext: ctx,
                    viewport
                }

                page.render(renderCtx).promise.then(() => {
                    pageIsRendering = false;

                    if(pageNumIsPending !== null) {
                        renderPage(pageNumIsPending);
                        pageNumIsPending = null;
                    }
                });

                // Output current page
                document.querySelector('#page-num').textContent = num;
            });
        };

        // Check for pages rendering
        const queueRenderPage = num => {
            if(pageIsRendering){
                pageNumIsPending = num;
            } else {
                renderPage(num);
            }
        }

        // Show Prev Page
        const showPrevPage = () => {
            if(pageNum <= 1) {
                return;
            }
            pageNum--;
            queueRenderPage(pageNum);
        }

        // Show next page
        const showNextPage = () => {    
            if(pageNum >= pdfDoc.numPages) {
                return;
            }
            pageNum++;
            queueRenderPage(pageNum);
        }

        // Get Document
        pdfjsLib.getDocument(url).promise.then(pdfDoc_ => {
            pdfDoc = pdfDoc_;

            document.querySelector('#page-count').textContent = pdfDoc.numPages;

            renderPage(pageNum)
        })
            .catch(err => {
                // Display error
                const div = document.createElement('div');
                div.className = 'error';
                div.appendChild(document.createTextNode(err.message));
                document.querySelector('body').insertBefore(div, canvas);
                // Remove top bar
                document.querySelector('.top-bar').style.display = 'none';
            });

        // Button Events
        document.querySelector('#prev-page').addEventListener('click', showPrevPage);
        document.querySelector('#next-page').addEventListener('click', showNextPage);
    </script>
</body>
</html>