<?php
/*****************************************************************************
 *   Copyright (C) 2006-2009, onPHP's MetaConfiguration Builder.             *
 *   Generated by onPHP-1.1.master at 2017-04-07 00:43:15                    *
 *   This file is autogenerated - do not edit.                               *
 *****************************************************************************/

	abstract class AutoThread extends IdentifiableObject
	{
		protected $board = null;
		protected $boardId = null;
		protected $createDate = null;
		protected $updateDate = null;
		protected $purgedAt = null;
		protected $deleted = false;
		protected $deletedAt = null;
		protected $sticky = false;
		protected $locked = false;
		protected $bumpLimitReached = false;
		protected $popularity = 0;
		protected $posts = null;
		
		/**
		 * @return Board
		**/
		public function getBoard()
		{
			if (!$this->board && $this->boardId) {
				$this->board = Board::dao()->getById($this->boardId);
			}
			
			return $this->board;
		}
		
		public function getBoardId()
		{
			return $this->board
				? $this->board->getId()
				: $this->boardId;
		}
		
		/**
		 * @return Thread
		**/
		public function setBoard(Board $board)
		{
			$this->board = $board;
			$this->boardId = $board ? $board->getId() : null;
			
			return $this;
		}
		
		/**
		 * @return Thread
		**/
		public function setBoardId($id)
		{
			$this->board = null;
			$this->boardId = $id;
			
			return $this;
		}
		
		/**
		 * @return Thread
		**/
		public function dropBoard()
		{
			$this->board = null;
			$this->boardId = null;
			
			return $this;
		}
		
		/**
		 * @return Timestamp
		**/
		public function getCreateDate()
		{
			return $this->createDate;
		}
		
		/**
		 * @return Thread
		**/
		public function setCreateDate(Timestamp $createDate)
		{
			$this->createDate = $createDate;
			
			return $this;
		}
		
		/**
		 * @return Thread
		**/
		public function dropCreateDate()
		{
			$this->createDate = null;
			
			return $this;
		}
		
		/**
		 * @return Timestamp
		**/
		public function getUpdateDate()
		{
			return $this->updateDate;
		}
		
		/**
		 * @return Thread
		**/
		public function setUpdateDate(Timestamp $updateDate)
		{
			$this->updateDate = $updateDate;
			
			return $this;
		}
		
		/**
		 * @return Thread
		**/
		public function dropUpdateDate()
		{
			$this->updateDate = null;
			
			return $this;
		}
		
		/**
		 * @return Timestamp
		**/
		public function getPurgedAt()
		{
			return $this->purgedAt;
		}
		
		/**
		 * @return Thread
		**/
		public function setPurgedAt(Timestamp $purgedAt = null)
		{
			$this->purgedAt = $purgedAt;
			
			return $this;
		}
		
		/**
		 * @return Thread
		**/
		public function dropPurgedAt()
		{
			$this->purgedAt = null;
			
			return $this;
		}
		
		public function getDeleted()
		{
			return $this->deleted;
		}
		
		public function isDeleted()
		{
			return $this->deleted;
		}
		
		/**
		 * @return Thread
		**/
		public function setDeleted($deleted = false)
		{
			$this->deleted = ($deleted === true);
			
			return $this;
		}
		
		/**
		 * @return Timestamp
		**/
		public function getDeletedAt()
		{
			return $this->deletedAt;
		}
		
		/**
		 * @return Thread
		**/
		public function setDeletedAt(Timestamp $deletedAt = null)
		{
			$this->deletedAt = $deletedAt;
			
			return $this;
		}
		
		/**
		 * @return Thread
		**/
		public function dropDeletedAt()
		{
			$this->deletedAt = null;
			
			return $this;
		}
		
		public function getSticky()
		{
			return $this->sticky;
		}
		
		public function isSticky()
		{
			return $this->sticky;
		}
		
		/**
		 * @return Thread
		**/
		public function setSticky($sticky = false)
		{
			$this->sticky = ($sticky === true);
			
			return $this;
		}
		
		public function getLocked()
		{
			return $this->locked;
		}
		
		public function isLocked()
		{
			return $this->locked;
		}
		
		/**
		 * @return Thread
		**/
		public function setLocked($locked = false)
		{
			$this->locked = ($locked === true);
			
			return $this;
		}
		
		public function getBumpLimitReached()
		{
			return $this->bumpLimitReached;
		}
		
		public function isBumpLimitReached()
		{
			return $this->bumpLimitReached;
		}
		
		/**
		 * @return Thread
		**/
		public function setBumpLimitReached($bumpLimitReached = false)
		{
			$this->bumpLimitReached = ($bumpLimitReached === true);
			
			return $this;
		}
		
		public function getPopularity()
		{
			return $this->popularity;
		}
		
		/**
		 * @return Thread
		**/
		public function setPopularity($popularity)
		{
			$this->popularity = $popularity;
			
			return $this;
		}
		
		/**
		 * @return ThreadPostsDAO
		**/
		public function getPosts($lazy = false)
		{
			if (!$this->posts || ($this->posts->isLazy() != $lazy)) {
				$this->posts = new ThreadPostsDAO($this, $lazy);
			}
			
			return $this->posts;
		}
		
		/**
		 * @return Thread
		**/
		public function fillPosts($collection, $lazy = false)
		{
			$this->posts = new ThreadPostsDAO($this, $lazy);
			
			if (!$this->id) {
				throw new WrongStateException(
					'i do not know which object i belong to'
				);
			}
			
			$this->posts->mergeList($collection);
			
			return $this;
		}
	}
?>