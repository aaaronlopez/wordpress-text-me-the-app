Steps to use [Text-Me-The-App](https://dev.branch.io/marketing-channels/text-me-the-app/guide/#insert-sendsms-snippet-into-your-page) on Wordpress
=========================================

1. Insert the following code into your template `header.php` file:
	```js
	<script type="text/javascript">
	    (function(b,r,a,n,c,h,_,s,d,k){if(!b[n]||!b[n]._q){for(;s<_.length;)c(h,_[s++]);d=r.createElement(a);d.async=1;d.src="https://cdn.branch.io/branch-latest.min.js";k=r.getElementsByTagName(a)[0];k.parentNode.insertBefore(d,k);b[n]=h}})(window,document,"script","branch",function(b,r){b[r]=function(){b._q.push([r,arguments])}},{_q:[],_v:1},"addListener applyCode banner closeBanner creditHistory credits data deepview deepviewCta first getCode init link logout redeem referrals removeListener sendSMS setBranchViewData setIdentity track validateCode".split(" "), 0);
	branch.init('YOUR-BRANCH-KEY');
	    function sendSMS(form) {
	        var phone = form.phone.value;
	        var linkData = {
	            tags: [],
	            channel: 'Website',
	            feature: 'TextMeTheApp',
	            data: {
	                'foo': 'bar'
	            }
	        };
	        var options = {};
	        var callback = function(err, result) {
	            if (err) {
	                alert("Sorry, something went wrong.");
	            }
	            else {
	                alert("SMS sent!");
	            }
	        };
	        branch.sendSMS(phone, linkData, options, callback);
	        form.phone.value = "";
	    }
	</script>
	 ```
	 See snippet [here](https://github.com/aaaronlopez/wordpress-text-me-the-app/blob/master/wp-content/themes/twentyfifteen/header.php#L23-L48)

1. Insert the following HTML into your page/post in `text` mode:
	```html
	Send SMS
	<form onsubmit="sendSMS(this); return false;">
	   <input id="phone" name="phone" type="tel" placeholder="(650) 123-4567" />
	   <br/>
	   <input type="submit"/>
	</form>
	```