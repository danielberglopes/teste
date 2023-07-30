<!doctype html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NTFLEX</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css\app.css">
  </head>
  <body style="background-color: #141414">
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #000000">
        <div class="container-fluid">
      
          <img class="navbar-brand" src="imgs\log-02.png" alt=" " style="width: 6rem;">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item active">
                <a class="nav-link "href="#">Inicio</a>
              </li>

              <li class="nav-item active">
                <a class="nav-link "href="#">Destaques</a>
              </li>

              <li class="nav-item active">
                <a class="nav-link "href="#">Adicinados recentemente</a>
              </li>
             
            </ul>
               <div class="col-md-3">
                <form class="d-flex  input-group" role="search" id="orm send">
                    <div class="input-group">
          <div class="input-group-text" onclick="alert('form send')"><i class="bi bi-zoom-out"></i></div>
          <input type="text" class="form-control" id="autoSizingInputGroup" placeholder="Username">
        </div>
            </form>
            </div>
           
            &nbsp;
            <li class="nav-item">
              <button class="btn btn-danger btn-sm mt-2 mr-3 ml-1"  title="Adicionar Videos"  data-bs-toggle="modal" data-bs-target="#videoModal">
                <i class="bi bi-caret-right"></i></button>
            </li>
            &nbsp;
            &nbsp;
          
            
          
            <a href="#">
                <img class="mt-1" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAjVBMVEUNfoD///8Ae30AeHoAdXcAdnl6q6z2+/vo8vLx+Ph1sbIAdHfu9PQHfH8AgYPl8vI7kJKRvr+hx8jO4+PJ3d4eioxppqja6eni7OxdoqRSnqC42dqXxsaw09Ntra8ph4l/uLmGtrdapqeozc02lZdMmZuuzM3A2NnU4+SRvL2fy8xSmZpEkZO+1NV1qaqNxlfBAAAEIElEQVR4nO3bXXeiOhQGYNgJg6AiiIiggtbP0U7//8+beJzjoCYtSAQ7630uetVmvZuEEOnWMAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAvjNi3Ii8rkWtpuiLGCyKxA/dOchIZ3FPmGc5tVckGf4iPMUIA9/QGYNoEZr/c4Y+0zh2FSydX2KY00RfDDJ2ZlEnbadEa+EUYziBrlkkPzav2W4rJc5vYphzTQPTbYGixBZmkc/uYphDPTG29yObHb/p7YYSSQxzqSEGJbZs6FX9kavJQ1mMQV6/RDaVjWzaDU8i/ZDGMBf116knH1nH0FUoLrQ5qR2D3hQVhl0dwUvjihh2VHctsZVqaC3By6K1IoaZ1a2Qj5QXr68leznKpWQu6y5Tfv8wbKXC7HkV7hQjN1xh+rQKmeQkca6w0acFRaoKa9+HyosXci3Ry7Kk5w4de6lhKCps+nl4d+w+q/88VD0uHA3HpSpoLJ/ErH6FdHRkIw+b3GdOPOljK841DE2yvWaiYflXjLGWTKLtaolB9w8Me938uxq+uC8x0LMZUHRboqNh9T+QY3lb4ErXrUL92dXli6N23tPwt04xRsfV+MCi5O+Hl8Gy4W20EMMvXOrhRut1Jsrd+WQy2c82Wt9TVo7hpatY5FhlhvbXtsQsLmh/11w9x0vEAAAAAAAAAAAAAAAAgH8KMc/4l/8HRXyz3e2GLf07uqD/nO+fkLHZ2eeWgnZnkVi0ifSvJOLJpUXKTtoskfxdp9fZb7TWSETprtA50XCD3RWW/Qky19dUQCx3b7r2PV1jV+dd+sU6M88iDc0v1I2Cu5bextuzLqyrdrGgdhOHmL6xrGM/0hP3EfurIM42YY/fkMRYOpR2ZDvt3Yfe/iaLPVn4j7TBiL0l9xexooe24UbXIkvWL7n7uSGryh1JjEfjofQrQefV/7T8X2OuNFIvnq3FmisxlyR+zYoWo4Fi9oRB1kAhapbyytvT4OM9OpUpr1PUZhnR8SOYqosT4sxq99AmHvifxBuEo2G2iXiXc1bEeddYp8vtaN/55K9P9bntH0qJZV+kFHrh9HAI3P8sDodVqL7nCuzwrc0Wwr9YFEjbxGuy5+MWv1F+jcgPPr2XHtAL3l9j/v4Qny+CUguvHGfnvt7n3r44LSu+IFnVIDgarW8vUsSjmepQUnr24iB65dZZYt54NXi8vtEw9V64vDOx/fmHuPre6vSmWa6/r/s5xDls7W7D8lU64fZn6vFvUt4ZMcrfk2D69VnAmQbj95xefm3KiHMn73prN/g1CuO441zm1HacQRyHo19Btva6vMz5/JWd6jQ83z8mx48fZ8kx2fi5R9++tiKiPl1rOxEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAALy43/ipMgzSotaqAAAAAElFTkSuQmCC"  style="width: 35px; height: 35px;" alt=""> 

 </a>
 &nbsp;

  <button class="btn  dropdown-toggle bt btn-group dropleft  " 
  data-bs-toggle="dropdown" aria-expanded="false" 
  style="--bs-btn-bg: #000000; 
  --bs-btn-border-color: #000000; color:aliceblue">
    
  </button>
  <div class="dropdown-menu dropdown-menu-right  " aria-labelledby="navbarDropdown">


    <li><a class="dropdown-item" href="/login">Sair</a></li>
 
</div>

 </div>


              
           
          
          </div>
        </div>
       
      </nav>

   
        @yield('content')
         
  
      <!-- Modal adicionar video -->
<div clagiss="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Adicionar Filmes</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         <form action="/adicona-filme" method="POST">
        @csrf
        <div class="form-group">
    <label>url do filme da ntflex:</label>
    <input type="text" name="url" class="form-control"  placeholder="https://youtu.be/Km_8jEUXB3E=????????????">
    <small  class="form-text text-muted">Copie e cole a URL do filme que deseja adicionar</small>
  </div>
  <div class="form-group">
    <label>titulo:</label>
    <input type="text" name="	tltle" class="form-control"  placeholder="Titulo do seu filme">
  </div>
  <div class="form-group">
    <label>Descricao:</label>
           <textarea class="form-control" >
         
           </textarea>
  </div>



  <div class="form-group">
    <label>categoria:</label>
         
  </div>

  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input">
    <label class="form-check-label" >Filmes destaque?</label>
  </div>
  <button type="submit" class="btn btn-danger ">Inserir</button>

         </form>
      </div>
     
    </div>
  </div>
</div>
      

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>