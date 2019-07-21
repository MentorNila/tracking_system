<template>
    <div class="container">
        <div class="card card-default">
            <div class="card-header">Dashboard</div>
            <div class="card-body text-center">
                Welcome, please enter your shipping tracking code in order to see estimated delivery date.
                <form autocomplete="off" @submit.prevent="searchCode">
                    <div class="form-group">
                        <label for="tracking_code">Tracking Code</label>
                        <input type="tracking_code" id="tracking_code" style="width:200px; margin: 0 auto;" class="form-control" placeholder="1Z 999 AA1 01 2345 6784" v-model="tracking_code" required>
                    </div>
                    <button type="submit" class="btn btn-default">Check</button>
                </form>
                {{message}}
            </div>
        </div>
    </div>
</template>
<script>
  export default {
    data() {
      return {
        tracking_code: null,
        message: null
      }
    },
    mounted() {
      //
    },
    methods: {
      searchCode() {
        var self = this;
        this.axios.post('http://localhost:8000/api/auth/search', {
          tracking_code: this.tracking_code
        })
        .then(function (response) {
          if (response.data.code == 200) {
            self.message = "Estimated delivery date: " + response.data.estimated_delivery_date;
          } else {
            self.message = "Invalid tracking code!"
          }
        })
        .catch(function (error) {
            self.message = "Something went wrong. Please contact the administrators if this error persists."
        });
      }
    }
  }
</script>