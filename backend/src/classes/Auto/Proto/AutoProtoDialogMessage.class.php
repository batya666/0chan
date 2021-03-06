<?php
/*****************************************************************************
 *   Copyright (C) 2006-2009, onPHP's MetaConfiguration Builder.             *
 *   Generated by onPHP-1.1.master at 2017-03-09 03:25:06                    *
 *   This file is autogenerated - do not edit.                               *
 *****************************************************************************/

	abstract class AutoProtoDialogMessage extends AbstractProtoClass
	{
		protected function makePropertyList()
		{
			return array(
				'id' => LightMetaProperty::fill(new LightMetaProperty(), 'id', null, 'integerIdentifier', 'DialogMessage', 8, true, true, false, null, null),
				'from' => LightMetaProperty::fill(new LightMetaProperty(), 'from', 'from_id', 'identifier', 'UserIdentity', null, true, false, false, 1, 3),
				'to' => LightMetaProperty::fill(new LightMetaProperty(), 'to', 'to_id', 'identifier', 'UserIdentity', null, true, false, false, 1, 3),
				'date' => LightMetaProperty::fill(new LightMetaProperty(), 'date', null, 'timestamp', 'Timestamp', null, true, true, false, null, null),
				'text' => LightMetaProperty::fill(new LightMetaProperty(), 'text', null, 'string', null, 2000, true, true, false, null, null),
				'read' => LightMetaProperty::fill(new LightMetaProperty(), 'read', null, 'boolean', null, null, true, true, false, null, null),
				'dialogs' => LightMetaProperty::fill(new LightMetaProperty(), 'dialogs', 'dialog_id', 'identifierList', 'Dialog', null, false, false, false, 3, null)
			);
		}
	}
?>