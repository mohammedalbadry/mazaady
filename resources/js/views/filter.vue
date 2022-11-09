<template>
    <div>
        <div class="center_box">

            <div class="form-group rtl my-2">
                <label for="exampleFormControlInput1" class="form-label" >الاقسام الرئيسية</label>
                <select class="form-select" @change="getSubCategories()" 
                        v-model="selected_main_category">
                    <option v-for="item in main_categories" :key="item.id" :value="item" v-text="item.name"></option>
                </select>
            </div>

            <div class="form-group rtl my-2">
                <label for="exampleFormControlInput1" class="form-label" >الاقسام الفرعية</label>
                <select class="form-select" @change="getMainOptions()"
                                            v-model="selected_sub_category">
                    <option v-for="item in sub_categories" :key="item.id" :value="item" v-text="item.name"></option>
                </select>
            </div>

            <div v-for="option in options" :key="option.id">

                <div class="form-group rtl my-2">

                    <label :for="'id' + option.id" class="form-label">{{option.name}}</label>
                    <input class="form-control" @input="setSelectedMainOptions($event, option)" :list="'datalistOptions'+ option.id" :id="'id' + option.id" :placeholder="' البحث عن ' + option.name">
                    <datalist :id="'datalistOptions'+ option.id">
                        <option v-for="item in option.values" :key="item.id" :value="item.name" :data-id="item.id"></option>
                        <option value="other" data-id="0"></option>
                    </datalist>
                    
                    <div class="my-1" v-if="selected_options[option.id].selected_value_id == 0">
                        <input type="text" v-model="selected_options[option.id].other_text" class="form-control" placeholder="اكتب خيار اخر">
                    </div>

                </div>

                <div  v-for="sub_option in sub_options" :key="sub_option.id">
                    <div  v-if="selected_options[option.id].selected_value_id == sub_option.value_id && selected_options[option.id].selected_value_id != 0">
                        
                        <div class="form-group rtl">

                            <label :for="'id' + sub_option.id" class="form-label">{{sub_option.name}}</label>
                            <input class="form-control" @input="setSelectedSubOptions($event, sub_option)" :list="'subdatalistOptions'+ sub_option.id" :id="'id' + sub_option.id" :placeholder="' البحث عن ' + sub_option.name">
                            <datalist :id="'subdatalistOptions'+ sub_option.id">
                                <option v-for="sub_option_item in sub_option.values" :key="sub_option_item.id" :value="sub_option_item.name" :data-id="sub_option_item.id"></option>
                                <option value="other" data-id="0"></option>
                            </datalist>

                            <div class="my-1" v-if="selected_sub_options[sub_option.id].selected_value_id == 0">
                                <input type="text" v-model="selected_sub_options[sub_option.id].other_text" class="form-control" placeholder="اكتب خيار اخر">
                            </div>

                        </div>

                    </div>
                </div>

            </div>

            <div class="d-grid gap-2 my-4">
                <button class="btn btn-primary" type="button" @click="submit()">ارسل</button>
            </div>
        </div>

        <div class="table_box" v-if="table.length">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">اسم الاختيار</th>
                        <th scope="col">قيمه الاختيار</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="(row, index) in table" :key="index">
                        <td>{{row.option_name}}</td>
                        <td>{{row.option_value}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return { 
            main_categories: [],
            selected_main_category: null, 
            sub_categories: {},
            selected_sub_category: null, 
            options: {},
            selected_options: {},
            sub_options: {},
            selected_sub_options: {},
            table:{}
        }
    },
    methods:{
        reset:function(){
            this.selected_sub_category= null, 
            this.options= {},
            this.selected_options=  {},
            this.sub_options=  {},
            this.selected_sub_options=  {},
            this.table= {}
        },
        readMainCategories:function(){
          axios({
            url: 'http://127.0.0.1:8000/api/main_categories',
            method: 'get',
          }).then(res=> {
            this.main_categories =  res.data.data
          }).catch( error => {});      
        },
        getSubCategories:function(){
          axios({
            url: `http://127.0.0.1:8000/api/sub_categories/${this.selected_main_category.id}`,
            method: 'get',
          }).then(res=> {
            this.reset()                  
            this.sub_categories =  res.data.data 
          }).catch( error => {});      
        },
        setSelectedOptionsKey:function(){
             var selected_options_array = {}
              this.options.forEach(function(option){
                    selected_options_array[option.id] = {
                        model_name: option.name,
                        model_id: option.id,
                        selected_value_name: null,
                        selected_value_id: null,
                        other_text: null
                    }
              });
              this.selected_options = selected_options_array

        },
        getMainOptions:function(){
              this.options = this.selected_sub_category.options
              this.setSelectedOptionsKey();
        },
        setSelectedMainOptions:function(event, option){   
            var value = event.target.value,  
                datalist_selected = document.querySelectorAll(`#id${option.id} + #datalistOptions${option.id} [value="${value}"]`);
            if (datalist_selected.length > 0) {
                var select_option_id  = datalist_selected[0].getAttribute('data-id');
                this.selected_options[option.id].selected_value_name = value;
                this.selected_options[option.id].selected_value_id = select_option_id; 
                //get sub options
                this.getSubOptions(select_option_id)    
            }
        },
        setSelectedSubOptionsKey:function(obj){
            this.selected_sub_options[obj.id] = {
                model_name: obj.name,
                model_id: obj.id,
                selected_value_name: null,
                selected_value_id: null,
                other_text: null
            }
    },
        getSubOptions:function(id){
            if(id){
                axios({
                    url: `http://127.0.0.1:8000/api/sub_Options/${id}`,
                    method: 'get',
                }).then(res=> {
                    if(!this.sub_options[res.data.data[0].id]){
                        if(res.data.data.length > 0){
                            this.sub_options[res.data.data[0].id] = res.data.data[0]
                            this.setSelectedSubOptionsKey(res.data.data[0]); 
                        }      
                    }
                }).catch( error => {});  
            }
        },
        setSelectedSubOptions:function(event, sub_option){   
            var value = event.target.value,  
                sub_datalist_selected = document.querySelectorAll(`#id${sub_option.id} + #subdatalistOptions${sub_option.id} [value="${value}"]`);
            if (sub_datalist_selected.length > 0) {
                var select_option_id  = sub_datalist_selected[0].getAttribute('data-id');
                this.selected_sub_options[sub_option.id].selected_value_name = value;
                this.selected_sub_options[sub_option.id].selected_value_id = select_option_id;   
            }
        },
        submit:function(){
            let data = Object.assign({}, this.selected_options, this.selected_sub_options);
            console.log(data);
            var formData = new FormData()
            formData.append('filters', JSON.stringify(data));
            axios({
                url: 'http://127.0.0.1:8000/api/filter',
                method: 'post',
                data: formData,
            }).then(res=> {
                this.table = res.data.data       
            }).catch( error => {});   
        }

    },
    mounted() {
        this.readMainCategories();
    }
};
</script>

<style scoped>
.center_box {
    margin: 50px auto;
    width: 600px;
    max-width: 90%;
    padding: 50px;
    color: #1e272e;
    border-radius: 7px;
    box-shadow: 0px 0px 7px #0000008a;
}
.table_box{
    margin: 50px auto;
    direction: rtl;
    width: 600px;
    max-width: 90%;
    padding: 50px;
    color: #1e272e;
    border-radius: 7px;
    box-shadow: 0px 0px 7px #0000008a;
}
.rtl{
    direction: rtl;
}
.rtl .form-select{
    background-position: left .75rem center;
}

</style>
