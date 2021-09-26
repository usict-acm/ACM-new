import { deleteBlog } from 'api/blog'
import { useState } from 'react'
import { useDispatch, useSelector } from 'react-redux'
import { Button } from 'reactstrap'
import { selectUser } from 'redux/slices/userSlice'
import { formatDate } from 'utils/commonFunctions'
import { useHistory } from 'react-router'

const BlogCard = ({ blogDetails }) => {
  const dispatch = useDispatch(),
    history = useHistory(),
    user = useSelector(selectUser),
    //eslint-disable-next-line
    [isHover, setIsHover] = useState(true),
    [isBtn, setIsBtn] = useState(false)

  const deleteHandler = async () => {
    const body = {
      userEmail: user?.email,
      blogId: blogDetails.blogId,
    }
    const res = await dispatch(deleteBlog(body))
    if (res.status === 'failed') alert('Failed to Delete')
  }

  return (
    <div
      onClick={() =>
        !isBtn &&
        history.push(
          blogDetails.isDraft
            ? `/createBlog/${blogDetails.blogId}`
            : `/blog/${blogDetails.blogId}`
        )
      }
      className='contentBox'
      //   onMouseEnter={() => setIsHover(true)}
      //   onMouseLeave={() => setIsHover(false)}
    >
      <div className='details'>
        <h3>{blogDetails.blogTitle}</h3>
        <p>{formatDate(blogDetails.lastUpdated)}</p>
      </div>
      {isHover && (
        <div
          onMouseEnter={() => setIsBtn(true)}
          onMouseLeave={() => setIsBtn(false)}
          className='blog-buttons'
        >
          <Button
            color='info'
            className='bx bxs-pencil'
            onClick={() => history.push(`/createBlog/${blogDetails.blogId}`)}
          ></Button>
          <Button
            color='danger'
            className='bx bx-trash'
            onClick={deleteHandler}
          ></Button>
        </div>
      )}
    </div>
  )
}

export default BlogCard
