<template>
    <div class="container my-size-vh">
        <div class="row align-items-center">
            <div class="col-12 p-4">
                <h1>
                    Conatcts
                </h1>
            </div>
            <div class="col-6">
                <div class="img-wrapper">
                    <img class="img-fluid w-25 mb-2" src="img/footer-map.jpg" alt="footer map">
                </div>
                <p v-for="(info, index) in footerInfo"
                :key="index">
                    {{info.name}}:
                    <span>
                        {{info.content}}
                    </span>
                </p>
            </div>
            <div class="col-6 my-bg-color p-4">
                    <form action="">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">
                            User
                        </span>
                        <input type="text" class="form-control" placeholder="Name and Surname" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">
                            @
                        </span>
                        <input type="email" class="form-control" placeholder="username@email.com" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">
                            Message
                        </span>
                        <input type="text" class="form-control" placeholder="Write your message here" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="text-center">
                        <button type="submit"
                    class="btn btn-outline-dark">
                        Submit
                    </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name:"Contacts",
    data(){
        return{
            footerInfo : [

                    {
                        name : 'Address',
                        content : 'Viale San.Giuseppe Milano, 45',
                    },
                    {
                        name : 'Phone number',
                        content : 65746416,
                    },
                    {
                        name : 'Mobile number',
                        content : 35765414546,
                    }



            ]
        }
    }
}
</script>

<style lang="scss" scoped>

.my-bg-color{
    background-color:rgb(223, 223, 223);
    border-radius: .5rem;
}
.img-wrapper:hover img{
    transform: scale(2);
}
</style>
