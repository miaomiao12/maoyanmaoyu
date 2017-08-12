var express = require('express');
var router = express.Router();
var request = require('request');


/* GET home pages. */
router.get('/', function(req, res, next) {
  res.render('index', { title: 'Express' });
});
router.get('/user',function(req,res,next){
	request.get('http://127.0.0.1/maoyanmaoyu/CI/user/userall', function (error, response, body) {
    	if (!error && response.statusCode == 200) {
      		result=body;
			console.log(body);
		 	res.json(result);
    }
  });
});
router.get('/reg',function(req,res,next){
    var username = req.query.username;
    var password = req.query.password;
    // console.log(username);
    request.get('http://127.0.0.1/maoyanmaoyu/CI/user/reg?username='+username+"&password="+password,function(error, response, body){
        if (!error && response.statusCode == 200) {
            console.log(body);
            res.json(body);
        }
    });
});
router.get('/hasreg',function(req,res,next){
    var username = req.query.username;
    console.log(username);
    request.get('http://127.0.0.1/maoyanmaoyu/CI/user/hasname?username='+username,function(error, response, body){
        if (!error && response.statusCode == 200) {
            res.json(body);
        }
    });
});
router.get('/logining',function(req,res,next){
    var username = req.query.username;
    var password = req.query.password;
    request.get('http://127.0.0.1/maoyanmaoyu/CI/user/CIlogining?username='+username+"&password="+password,function(error, response, body){
        if (!error && response.statusCode == 200) {          
            console.log(body);
            res.json(body);
        }
    });
});

module.exports = router;
