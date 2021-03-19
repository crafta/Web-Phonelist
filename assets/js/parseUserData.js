/***
 * Reads the User JSON file, which is generated by the backend
 * to manage them in the frontend
 */
console.log("Reading JSON file...");

$.getJSON("../../user_sort_name.json").then(function(data) {

	let userData = [];
	Object.keys(data).forEach(key => {
		userData.push(data[key]);
	});

	window.userData = userData;
	window.filteredUserData = userData;

	let departments = [];
	userData.map(user => {
		departments.push(user.gruppetext);
	});
	window.departments = [...new Set(departments)];

    console.log("JSON file loaded!");
	renderViewMode();
    countUserData();
    renderFilters();

}).fail(function(){
	console.log("JSON Datei konnte nicht gelesen werden!");
});