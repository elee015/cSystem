<?php

class Report extends Eloquent
{
    protected $table = 'Reports';
    protected $primaryKey = 'reportID';
    protected $fillable = array('reportType','reportName', 'reportedBy', 'contactNo', 'location', 'comment', 'isDeleted', 'isApproved', 'assignedTo', 'status');
    protected $guarded = array('reportID');
}