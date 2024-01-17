<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>

    <script src="{{asset('js/vue.min.js')}}"></script>

    @vite('resources/stylesheet/style.scss')
</head>
<body>
    <div class="theme-selection" id="theme-selection">
        {{--header--}}
        <header class="shadow-sm py-3 px-3 px-sm-5 fixed-top d-flex align-items-center justify-content-between">
            <h2>Theme Selection</h2>
            <button class="btn btn-orange-red rounded-pill">Next</button>
        </header>

        <div class="content">
            <div class="container">
                <div class="selection-items">
                    <div class="img" @click="selectItem($event)">
                        <img src="{{asset('/images/theme-selection/template-1.png')}}" class="shadow-lg theme-img" alt="">
                        <div class="select">Selected</div>
                        <div class="action">
                            <a href="javascript:void(0)" @click="openViewModal($event)">
                                <img src="{{asset('/images/theme-selection/view.png')}}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="img" @click="selectItem($event)">
                        <div class="select">Selected</div>
                        <img src="{{asset('/images/theme-selection/template-2.png')}}" class="shadow-lg theme-img" alt="">
                        <div class="action">
                            <a href="javascript:void(0)" @click="openViewModal($event)">
                                <img src="{{asset('/images/theme-selection/view.png')}}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="img" @click="selectItem($event)">
                        <div class="select">Selected</div>
                        <img src="{{asset('/images/theme-selection/template-3.png')}}" class="shadow-lg theme-img" alt="">
                        <div class="action">
                            <a href="javascript:void(0)" @click="openViewModal($event)">
                                <img src="{{asset('/images/theme-selection/view.png')}}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="img" @click="selectItem($event)">
                        <div class="select">Selected</div>
                        <img src="{{asset('/images/theme-selection/template-4.png')}}" class="shadow-lg theme-img" alt="">
                        <div class="action">
                            <a href="javascript:void(0)" @click="openViewModal($event)">
                                <img src="{{asset('/images/theme-selection/view.png')}}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="img" @click="selectItem($event)">
                        <div class="select">Selected</div>
                        <img src="{{asset('/images/theme-selection/template-5.png')}}" class="shadow-lg theme-img" alt="">
                        <div class="action">
                            <a href="javascript:void(0)" @click="openViewModal($event)">
                                <img src="{{asset('/images/theme-selection/view.png')}}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade view-modal" id="viewModal" tabindex="-1" aria-labelledby="viewModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="img">
                            <img :src="img" alt="">
                        </div>
                    </div>
                    <div class="modal-footer border-0">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <script>
            new Vue({
                el: '#theme-selection',
                data: {
                    img: null
                },

                methods: {
                    openViewModal(e){
                        console.log(e.target.closest('.img'))
                        const src = e.target.closest('.img').querySelector('.theme-img').src;
                        this.img = src
                        console.log(src)
                        const myModal = new bootstrap.Modal(document.getElementById('viewModal'), {})
                        myModal.show()
                    },

                    selectItem(e){
                        const selectItems = document.querySelectorAll('.selection-items .img');
                        const currentItem = e.target.closest('.img');
                        selectItems.forEach(item => {
                            if(item === currentItem){
                                item.classList.add('active')
                            }else{
                                item.classList.remove('active')
                            }
                        })
                    }
                },

                mounted(){
                }
            })
        </script>
    </div>
</body>
</html>
