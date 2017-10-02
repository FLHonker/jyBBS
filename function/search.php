
<?php   //搜索帖子类
	include('../function/connsql.php');
class Search{
	private $TID=array();
	private $TSID=array();
	private $TUID=array();
	private $TReplyCount=array();
	private $TTpic=array();
	private $TContents=array();
	private $TTime=array();
	private $TClickCount=array();
	private $TFlag=array();
	private $TLastReplyUserID=array();
	private $TLastReplyTime=array();
	function serhTopic($conn,$keyword){   //数据库中根据关键词搜索帖子并写到成员变量中
		$keyarray=explode(' ',$keyword);
		if($keyarray){
			$n=count($keyarray);
			$query="SELECT * FROM bbstopic WHERE ";
			for($i=0;$i<$n;$i++){
				$query=$query."TTpic LIKE '%$keyarray[$i]%' OR TContents LIKE '%$keyarray[$i]%' ";
				if($i<$n-1)
					$query=$query."OR ";
			}
			$result=mysqli_query($link,$query);
			if($result){
				$array=array();
				while($array=mysqli_fetch_array($result)){
					array_push($this->TID,$array['TID']);
						array_push($this->TSID,$array['TSID']);
					array_push($this->TUID,$array['TUID']);
					array_push($this->TReplyCount,$array['TReplyCount']);
					array_push($this->TTpic,$array['TTpic']);
					array_push($this->TContents,$array['TContents']);
					array_push($this->TTime,$array['TTime']);
					array_push($this->TClickCount,$array['TClickCount']);
					array_push($this->TFlag,$array['TFlag']);
					array_push($this->TLastReplyUserID,$array['TLastReplyUserID']);
					array_push($this->TLastReplyTime,$array['TLastReplyTime']);
				}
				return TRUE;
			}else
				return FALSE;
		}
	}
	function __get($name){      //获取成员值
		if(isset($this->$name))
			return $this->$name;
		else
			return NULL;
	}
		
	function showReault(){     //前端动态显示帖子索引
		if($this->TUID){    //如果搜索结果不为空
				
		}
	}
}
?>				
				