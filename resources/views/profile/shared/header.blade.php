<header class="py-3 px-3 px-sm-5 shadow-sm fixed-top bg-white" id="profile-header">
    <div class="container">
        <div class="d-flex align-items-center justify-content-between">
            <h2>Profile</h2>
            <div class="right">
                <a href="javascript:void(0)" class="avatar" @click="openDropDown">
                    <img src="{{asset('/images/generate-form/profile.png')}}" height="40" width="40" alt="">
                </a>
                <ul class="drop_down shadow rounded">
                    <li>
                        <a href="" class="btn btn-aqua-blue rounded-pill">Change Password</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="btn btn-aqua-blue rounded-pill" @click="logout">Log out</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>


<script>

    new Vue({
        el: '#profile-header',
        data(){
            return {
                loading: false
            }
        },
        methods: {
            logout(){
                this.loading = true;
                this.error = null;
                axios.post('{{ route('logout') }}').then(response => {
                    window.location.href = "{{route('login')}}";
                })
            },

            openDropDown(){
                const dropDown = document.querySelector('.drop_down');
                if(dropDown.classList.contains('active')){
                    dropDown.classList.remove('active');
                }else{
                    dropDown.classList.add('active');
                }

            },
           outsideClick(){
                window.addEventListener('click', (e) => {
                    const avatar = document.querySelector('.avatar');
                    const dropDown = document.querySelector('.drop_down');

                    if(!avatar.contains(e.target) && !dropDown.contains(e.target)){
                        dropDown.classList.remove('active');
                    }
                })
            }
        },
        mounted(){
            this.outsideClick();
        }
    })
</script>
