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
router.get('/new_article',function(req,res,next) {
	request.get('http://127.0.0.1/maoyanmaoyu/CI/article/newarticle', function (error, response, body) {
		if (!error && response.statusCode == 200) {
			//console.log(body);
			result = body;
			console.log(result);
			res.json(result);
		}
	});
});
router.get('/hot_article',function(req,res,next) {
	request.get('http://127.0.0.1/maoyanmaoyu/CI/article/hotarticle', function (error, response, body) {
		if (!error && response.statusCode == 200) {
			//console.log(body);
			result = body;
			console.log(result);
			res.json(result);
		}
	});
});
router.get('/detail_article',function(req,res,next) {
	var tid= req.query.t_id;
	console.log(tid);
	request.get('http://127.0.0.1/maoyanmaoyu/CI/article/detailarticle/'+tid, function (error, response, body) {
		if (!error && response.statusCode == 200) {
			//console.log(body);
			result = body;
			res.json(result);
		}
	});
});
router.get('/add_comment',function(req,res,next) {
	var tid= req.query.t_id;
	var c_user_id= req.query.user_id;
	var c_content= req.query.c_content;
	console.log(c_content);
	request.post('http://127.0.0.1/maoyanmaoyu/CI/comment/add_comment/'+tid+'/'+c_user_id+'/'+c_content, function (error, response, body) {
		if (!error && response.statusCode == 200) {
			console.log(body);
			result = body;
			res.json(result);
		}
	});
});
router.get('/allcomment',function(req,res,next) {
	var tid= req.query.t_id;
	request.get('http://127.0.0.1/maoyanmaoyu/CI/comment/allcomment/'+tid, function (error, response, body) {
		if (!error && response.statusCode == 200) {
			console.log(body);
			result = body;
			res.json(result);
		}
	});
});
router.get('/talentwall',function(req,res,next) {
	request.get('http://127.0.0.1/maoyanmaoyu/CI/user/talentwall/', function (error, response, body) {
		if (!error && response.statusCode == 200) {
			console.log(body);
			result = body;
			res.json(result);
		}
	});
});
router.get('/shownewmiao',function(req,res,next) {
	request.get('http://127.0.0.1/maoyanmaoyu/CI/article/show_Newmiao/', function (error, response, body) {
		if (!error && response.statusCode == 200) {
			console.log(body);
			res.json(body);
		}
	});
});

router.get('/addcatalogname',function(req,res,next) {
	var cname= req.query.cname;
	request.post({url:'http://127.0.0.1/maoyanmaoyu/CI/article/add_catalog',form:{cname:cname}},function(error,response,body){
		if (!error && response.statusCode == 200) {
        }
	});
});

router.get('/talent-info',function(req,res,next) {
	var uid= req.query.u_id;
	console.log(uid);
	request.get('http://127.0.0.1/maoyanmaoyu/CI/user/select_talent_info/'+uid, function (error, response, body) {
		if (!error && response.statusCode == 200) {
			result = body;
			res.json(result);
		}
	});
});

router.get('/his-trend',function(req,res,next) {
	var uid= req.query.u_id;
	request.get('http://127.0.0.1/maoyanmaoyu/CI/article/select_his_trend/'+uid, function (error, response, body) {
		if (!error && response.statusCode == 200) {
			console.log(body);
			result = body;
			res.json(result);
		}
	});
});

router.get('/all_talent',function(req,res,next) {
	request.get('http://127.0.0.1/maoyanmaoyu/CI/user/select_all/', function (error, response, body) {
		if (!error && response.statusCode == 200) {
			console.log(body);
			result = body;
			res.json(result);
		}
	});
});

module.exports = router;
