import './bootstrap'
import Vue from 'vue'

var app = new Vue({
    el: "#app",
    data: function () {
      return {
        msg: "adsaf"
      };
    },
    methods: {
      showMessage: function () {
        console.log(msg)
      }
    }
  })