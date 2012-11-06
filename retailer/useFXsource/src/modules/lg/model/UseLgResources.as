package modules.lg.model
{
	import devdoo.fx.UseUtil;
	import devdoo.db.UseTableModel;
	
	public class UseLgResources extends UseTableModel
	{
		public function UseLgResources(){
			
			this._classNameModel = 'useLgResources';
			this._table = 'lg_resources';
			this._alias = 'USE_LG_RESOURCES';
			this._idField = 'id';
			this._idFieldAlias = 'USE_LG_RESOURCES_id';
			
			this._fields[this._alias + "_changed_in"] = "changed_in";
			this._fields[this._alias + "_created_in"] = "created_in";
			this._fields[this._alias + "_date_in"] = "date_in";
			this._fields[this._alias + "_date_out"] = "date_out";
			this._fields[this._alias + "_description"] = "description";
			this._fields[this._alias + "_filename"] = "filename";
			this._fields[this._alias + "_filesize"] = "filesize";
			this._fields[this._alias + "_folderpath"] = "folderpath";
			this._fields[this._alias + "_format"] = "format";
			this._fields[this._alias + "_has_image_high"] = "has_image_high";
			this._fields[this._alias + "_height"] = "height";
			this._fields[this._alias + "_id"] = "id";
			this._fields[this._alias + "_image_video"] = "image_video";
			this._fields[this._alias + "_is_active"] = "is_active";
			this._fields[this._alias + "_is_edit"] = "is_edit";
			this._fields[this._alias + "_material_type"] = "material_type";
			this._fields[this._alias + "_observation_status"] = "observation_status";
			this._fields[this._alias + "_order_position"] = "order_position";
			this._fields[this._alias + "_resolution"] = "resolution";
			this._fields[this._alias + "_resource_status"] = "resource_status";
			this._fields[this._alias + "_resource_type"] = "resource_type";
			this._fields[this._alias + "_source_id"] = "source_id";
			this._fields[this._alias + "_status_new_date_out"] = "status_new_date_out";
			this._fields[this._alias + "_title"] = "title";
			this._fields[this._alias + "_total_comments"] = "total_comments";
			this._fields[this._alias + "_total_download"] = "total_download";
			this._fields[this._alias + "_total_rating"] = "total_rating";
			this._fields[this._alias + "_total_rating_votes"] = "total_rating_votes";
			this._fields[this._alias + "_total_retailer"] = "total_retailer";
			this._fields[this._alias + "_total_view"] = "total_view";
			this._fields[this._alias + "_upload_time"] = "upload_time";
			this._fields[this._alias + "_width"] = "width";
		}
		
		public function exprMYSQL(field:String, expr:String, alias:String = null, useTableAlias:Boolean=false):UseLgResources{
			this.expr(field, expr, alias, useTableAlias, 'MYSQL');
			return this;
		}
		
		public function exprSQLite(field:String, expr:String, alias:String = null, useTableAlias:Boolean=false):UseLgResources{
			this.expr(field, expr, alias, useTableAlias, 'SQLITE');
			return this;
		}
		
		public function setVar(field:String, value:String):UseLgResources{
			this._setVar[field] = value;
			return this;
		}
		public function get dataAlias():Object{
			var data:Object = {};
			data[this._alias + "_changed_in"] = this.changed_in;
			data[this._alias + "_created_in"] = this.created_in;
			data[this._alias + "_date_in"] = this.date_in;
			data[this._alias + "_date_out"] = this.date_out;
			data[this._alias + "_description"] = this.description;
			data[this._alias + "_filename"] = this.filename;
			data[this._alias + "_filesize"] = this.filesize;
			data[this._alias + "_folderpath"] = this.folderpath;
			data[this._alias + "_format"] = this.format;
			data[this._alias + "_has_image_high"] = this.has_image_high;
			data[this._alias + "_height"] = this.height;
			data[this._alias + "_id"] = this.id;
			data[this._alias + "_image_video"] = this.image_video;
			data[this._alias + "_is_active"] = this.is_active;
			data[this._alias + "_is_edit"] = this.is_edit;
			data[this._alias + "_material_type"] = this.material_type;
			data[this._alias + "_observation_status"] = this.observation_status;
			data[this._alias + "_order_position"] = this.order_position;
			data[this._alias + "_resolution"] = this.resolution;
			data[this._alias + "_resource_status"] = this.resource_status;
			data[this._alias + "_resource_type"] = this.resource_type;
			data[this._alias + "_source_id"] = this.source_id;
			data[this._alias + "_status_new_date_out"] = this.status_new_date_out;
			data[this._alias + "_title"] = this.title;
			data[this._alias + "_total_comments"] = this.total_comments;
			data[this._alias + "_total_download"] = this.total_download;
			data[this._alias + "_total_rating"] = this.total_rating;
			data[this._alias + "_total_rating_votes"] = this.total_rating_votes;
			data[this._alias + "_total_retailer"] = this.total_retailer;
			data[this._alias + "_total_view"] = this.total_view;
			data[this._alias + "_upload_time"] = this.upload_time;
			data[this._alias + "_width"] = this.width;
			return data;
		}
		public function get data():Object{
			var data:Object = {};
			data.changed_in = this.changed_in;
			data.created_in = this.created_in;
			data.date_in = this.date_in;
			data.date_out = this.date_out;
			data.description = this.description;
			data.filename = this.filename;
			data.filesize = this.filesize;
			data.folderpath = this.folderpath;
			data.format = this.format;
			data.has_image_high = this.has_image_high;
			data.height = this.height;
			data.id = this.id;
			data.image_video = this.image_video;
			data.is_active = this.is_active;
			data.is_edit = this.is_edit;
			data.material_type = this.material_type;
			data.observation_status = this.observation_status;
			data.order_position = this.order_position;
			data.resolution = this.resolution;
			data.resource_status = this.resource_status;
			data.resource_type = this.resource_type;
			data.source_id = this.source_id;
			data.status_new_date_out = this.status_new_date_out;
			data.title = this.title;
			data.total_comments = this.total_comments;
			data.total_download = this.total_download;
			data.total_rating = this.total_rating;
			data.total_rating_votes = this.total_rating_votes;
			data.total_retailer = this.total_retailer;
			data.total_view = this.total_view;
			data.upload_time = this.upload_time;
			data.width = this.width;
			return data;
		}
		public function get dataZF():Object{
			return this._data;
		}
		private var _material_type:*;
		public function set material_type(material_type:*):void{
			this._material_type = UseUtil.checkData('material_type', material_type);
			this._data['material_type'] = isNull(this._material_type);
			this._isSave = true;
		}
		public function get material_type():*{ return this._material_type; }
		
		private var _format:*;
		public function set format(format:*):void{
			this._format = UseUtil.checkData('format', format);
			this._data['format'] = this._format;
			this._isSave = true;
		}
		public function get format():*{ return this._format; }
		
		private var _date_in:*;
		public function set date_in(date_in:*):void{
			this._date_in = UseUtil.checkData('date_in', date_in);
			this._data['date_in'] = isNull(this._date_in);
			this._isSave = true;
		}
		public function get date_in():*{ return this._date_in; }
		
		private var _description:*;
		public function set description(description:*):void{
			this._description = UseUtil.checkData('description', description);
			this._data['description'] = isNull(this._description);
			this._isSave = true;
		}
		public function get description():*{ return this._description; }
		
		private var _total_rating_votes:*;
		public function set total_rating_votes(total_rating_votes:*):void{
			this._total_rating_votes = UseUtil.checkData('total_rating_votes', total_rating_votes);
			this._data['total_rating_votes'] = this._total_rating_votes;
			this._isSave = true;
		}
		public function get total_rating_votes():*{ return this._total_rating_votes; }
		
		private var _observation_status:*;
		public function set observation_status(observation_status:*):void{
			this._observation_status = UseUtil.checkData('observation_status', observation_status);
			this._data['observation_status'] = isNull(this._observation_status);
			this._isSave = true;
		}
		public function get observation_status():*{ return this._observation_status; }
		
		private var _order_position:*;
		public function set order_position(order_position:*):void{
			this._order_position = UseUtil.checkData('order_position', order_position);
			this._data['order_position'] = this._order_position;
			this._isSave = true;
		}
		public function get order_position():*{ return this._order_position; }
		
		private var _filename:*;
		public function set filename(filename:*):void{
			this._filename = UseUtil.checkData('filename', filename);
			this._data['filename'] = this._filename;
			this._isSave = true;
		}
		public function get filename():*{ return this._filename; }
		
		private var _resource_status:*;
		public function set resource_status(resource_status:*):void{
			this._resource_status = UseUtil.checkData('resource_status', resource_status);
			this._data['resource_status'] = this._resource_status;
			this._isSave = true;
		}
		public function get resource_status():*{ return this._resource_status; }
		
		private var _date_out:*;
		public function set date_out(date_out:*):void{
			this._date_out = UseUtil.checkData('date_out', date_out);
			this._data['date_out'] = isNull(this._date_out);
			this._isSave = true;
		}
		public function get date_out():*{ return this._date_out; }
		
		private var _upload_time:*;
		public function set upload_time(upload_time:*):void{
			this._upload_time = UseUtil.checkData('upload_time', upload_time);
			this._data['upload_time'] = isNull(this._upload_time);
			this._isSave = true;
		}
		public function get upload_time():*{ return this._upload_time; }
		
		private var _filesize:*;
		public function set filesize(filesize:*):void{
			this._filesize = UseUtil.checkData('filesize', filesize);
			this._data['filesize'] = this._filesize;
			this._isSave = true;
		}
		public function get filesize():*{ return this._filesize; }
		
		private var _total_download:*;
		public function set total_download(total_download:*):void{
			this._total_download = UseUtil.checkData('total_download', total_download);
			this._data['total_download'] = this._total_download;
			this._isSave = true;
		}
		public function get total_download():*{ return this._total_download; }
		
		private var _resolution:*;
		public function set resolution(resolution:*):void{
			this._resolution = UseUtil.checkData('resolution', resolution);
			this._data['resolution'] = isNull(this._resolution);
			this._isSave = true;
		}
		public function get resolution():*{ return this._resolution; }
		
		private var _title:*;
		public function set title(title:*):void{
			this._title = UseUtil.checkData('title', title);
			this._data['title'] = this._title;
			this._isSave = true;
		}
		public function get title():*{ return this._title; }
		
		private var _has_image_high:*;
		public function set has_image_high(has_image_high:*):void{
			this._has_image_high = UseUtil.checkData('has_image_high', has_image_high);
			this._data['has_image_high'] = this._has_image_high;
			this._isSave = true;
		}
		public function get has_image_high():*{ return this._has_image_high; }
		
		private var _image_video:*;
		public function set image_video(image_video:*):void{
			this._image_video = UseUtil.checkData('image_video', image_video);
			this._data['image_video'] = isNull(this._image_video);
			this._isSave = true;
		}
		public function get image_video():*{ return this._image_video; }
		
		private var _total_view:*;
		public function set total_view(total_view:*):void{
			this._total_view = UseUtil.checkData('total_view', total_view);
			this._data['total_view'] = this._total_view;
			this._isSave = true;
		}
		public function get total_view():*{ return this._total_view; }
		
		private var _is_edit:*;
		public function set is_edit(is_edit:*):void{
			this._is_edit = UseUtil.checkData('is_edit', is_edit);
			this._data['is_edit'] = this._is_edit;
			this._isSave = true;
		}
		public function get is_edit():*{ return this._is_edit; }
		
		private var _source_id:*;
		public function set source_id(source_id:*):void{
			this._source_id = UseUtil.checkData('source_id', source_id);
			this._data['source_id'] = this._source_id;
			this._isSave = true;
		}
		public function get source_id():*{ return this._source_id; }
		
		private var _total_comments:*;
		public function set total_comments(total_comments:*):void{
			this._total_comments = UseUtil.checkData('total_comments', total_comments);
			this._data['total_comments'] = this._total_comments;
			this._isSave = true;
		}
		public function get total_comments():*{ return this._total_comments; }
		
		private var _changed_in:*;
		public function set changed_in(changed_in:*):void{
			this._changed_in = UseUtil.checkData('changed_in', changed_in);
			this._data['changed_in'] = this._changed_in;
			this._isSave = true;
		}
		public function get changed_in():*{ return this._changed_in; }
		
		private var _created_in:*;
		public function set created_in(created_in:*):void{
			this._created_in = UseUtil.checkData('created_in', created_in);
			this._data['created_in'] = this._created_in;
			this._isSave = true;
		}
		public function get created_in():*{ return this._created_in; }
		
		private var _id:*;
		public function set id(id:*):void{
			this._id = UseUtil.checkData('id', id);
			this._data['id'] = this._id;
			this._isSave = true;
		}
		public function get id():*{ return this._id; }
		
		private var _total_retailer:*;
		public function set total_retailer(total_retailer:*):void{
			this._total_retailer = UseUtil.checkData('total_retailer', total_retailer);
			this._data['total_retailer'] = this._total_retailer;
			this._isSave = true;
		}
		public function get total_retailer():*{ return this._total_retailer; }
		
		private var _total_rating:*;
		public function set total_rating(total_rating:*):void{
			this._total_rating = UseUtil.checkData('total_rating', total_rating);
			this._data['total_rating'] = this._total_rating;
			this._isSave = true;
		}
		public function get total_rating():*{ return this._total_rating; }
		
		private var _width:*;
		public function set width(width:*):void{
			this._width = UseUtil.checkData('width', width);
			this._data['width'] = this._width;
			this._isSave = true;
		}
		public function get width():*{ return this._width; }
		
		private var _status_new_date_out:*;
		public function set status_new_date_out(status_new_date_out:*):void{
			this._status_new_date_out = UseUtil.checkData('status_new_date_out', status_new_date_out);
			this._data['status_new_date_out'] = isNull(this._status_new_date_out);
			this._isSave = true;
		}
		public function get status_new_date_out():*{ return this._status_new_date_out; }
		
		private var _height:*;
		public function set height(height:*):void{
			this._height = UseUtil.checkData('height', height);
			this._data['height'] = this._height;
			this._isSave = true;
		}
		public function get height():*{ return this._height; }
		
		private var _folderpath:*;
		public function set folderpath(folderpath:*):void{
			this._folderpath = UseUtil.checkData('folderpath', folderpath);
			this._data['folderpath'] = this._folderpath;
			this._isSave = true;
		}
		public function get folderpath():*{ return this._folderpath; }
		
		private var _is_active:*;
		public function set is_active(is_active:*):void{
			this._is_active = UseUtil.checkData('is_active', is_active);
			this._data['is_active'] = this._is_active;
			this._isSave = true;
		}
		public function get is_active():*{ return this._is_active; }
		
		private var _resource_type:*;
		public function set resource_type(resource_type:*):void{
			this._resource_type = UseUtil.checkData('resource_type', resource_type);
			this._data['resource_type'] = this._resource_type;
			this._isSave = true;
		}
		public function get resource_type():*{ return this._resource_type; }
		
	}
}