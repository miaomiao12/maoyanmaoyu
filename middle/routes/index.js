var express = require('express');
var router = express.Router();
var request = require('request');


/* GET home page. */
router.get('/', function(req, res, next) {
  res.render('index', { title: 'Express' });
});
router.get('/user',function(req,res,next){
	request.get('http://127.0.0.1/miaomiaomiao/CI/user/userall', function (error, response, body) {
    	if (!error && response.statusCode == 200) {
      		result=body;
			console.log(body);
		 	res.json(result);
    }
  });

});

module.exports = router;
