var express = require('express');
var router = express.Router();
var request = require('request');
/* GET users listing. */

router.get('/myinfo', function(req, res, next) {
	var uid = req.query.u_id;
	request.get('http://127.0.0.1/maoyanmaoyu/CI/mypage/mybody/' + uid, function(error, response, body) {
		if (!error && response.statusCode == 200) {
			result = body;
			console.log(body);
			res.json(result);
		}
	})
});

module.exports = router;