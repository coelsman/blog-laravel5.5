<script id="event-compiler" type="text/x-handlebars-template">
	{{#each events}}
		<div class="col col-sm-4 col-xs-6 col-xxs-12">
			<div class="clearfix">
				<div class="col col-xxs-12 bg-blue event-wrapper">
					<div class="line-row">
						<h3>{{str_uppercase title}}</h3>
						<span>{{address}}</span>
						<span class="icon icon-1">
							{{#int_larger emails 0}}
								<span class="badge">{{emails}}</span>
							{{/int_larger}}
						</span>
					</div>
					<div class="line-row">
						{{#if time_range}}
							<h3>{{date_range}}</h3>
							<h4>{{time_range}}</h4>
						{{else}}
							<h3 class="date">{{date_range}}</h3>
						{{/if}}
					</div>
					<div class="line-row">
						<h2>£{{float_format ticket_prize 0}} <span>{{hours_sale}}hrs @£{{float_format sale_ticket_prize 2}}</span></h2>
						<span class="icon icon-3">
							{{#int_larger attends 0}}
								<span class="badge">{{attends}}</span>
							{{/int_larger}}
						</span>
					</div>
				</div>
			</div>
		</div>
	{{/each}}
</script>

<div id="event-wrapper"></div>