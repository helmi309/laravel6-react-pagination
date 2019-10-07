import React from 'react';

const PostContent = (props) => (
  <div className="card card-default card-small card-body border-rounded custom-border margin" >
    <div className="grid grid-medium flex flex-middle" data-grid>
      <div className="width-1-1">
        <h4 className="card-title margin-remove-top margin-remove-bottom">
          <a className="link-reset text-bold" href={props.post.url}>
            {props.post.title}
          </a>
        </h4>
        <span className="article-meta">
          <span data-icon="calendar"></span>
           Published at {moment(props.post.created_at).format('lll')}
        </span>
      </div>

      <div className="width-2-3@s width-4-6@m margin-small-top">
        <p className="margin-small text-justify">
          {props.post.description}
        </p>
        <a data-icon="icon:  arrow-right" href={props.post.url} title="Read More"
        className="button button-link button-small text-bold">Read More</a>
      </div>
    </div>
  </div>
);

export default PostContent;
